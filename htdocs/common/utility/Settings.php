<?php
include_once "common/config/SettingsConfig.php";
include_once "common/utility/DB.php";

class Settings
{
    private static Settings $instance;
    private array $data;

    /**
     * Settings constructor.
     */
    private function __construct()
    {
        $sql = "SELECT name, value FROM settings";
        $result = DB::get()->run($sql)->fetchAll();

        foreach ($result as $entry) {
            $this->data[$entry["name"]] = $entry["value"];
        }
    }

    private static function load() {
        if(!isset(self::$instance)) self::$instance = new Settings();
    }

    public static function get(string $key) : string
    {
        self::load();

        if(isset(self::$instance->data[$key])) {
            return self::$instance->data[$key];
        } else {
            if(isset(SettingsConfig::DEFAULT_VALUES[$key])) {
                return SettingsConfig::DEFAULT_VALUES[$key];
            } else {
                throw new InvalidArgumentException("Unknown setting: ".$key.". Please add either a corresponding database entry or a default value in common/config/SettingsConfig.php.");
            }
        }
    }

    public static function getBoolean(string $key) : bool {
        $result = self::get($key);
        if($result === "1") return true;
        return false;
    }

    public static function set(string $key, ?string $value) {
        self::load();

        if($value === null) { // Delete the value if it's set to null
            DB::get()->run("DELETE FROM settings WHERE name = :key", ["key" => $key]);
            unset(self::$instance->data[$key]);
        } else { // Otherwise, update or create the entry
            $exists = isset(self::$instance->data[$key]);

            if($exists) {
                $sql = "UPDATE settings SET value = :value WHERE name = :key";
            } else {
                $sql = "INSERT INTO settings (name, value) VALUES (:key, :value )";
            }

            DB::get()->run($sql, ["key" => $key, "value" => $value]);
            self::$instance->data[$key] = $value;
        }
    }
}
