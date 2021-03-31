<?php
include_once "common/config/DBConfig.php";

class DB
{

    private static DB $instance;

    private PDO $pdo;

    /**
     * Gets the instance of the DB class to be used.
     * If none exists, a new one will be created and then returned.
     * @return DB The instance of the DB class
     */
    public static function get(): DB
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();

            $dsn = "mysql:host=" . DBConfig::HOST . ";port=" . DBConfig::PORT . ";dbname=" . DBConfig::DATABASE . ";charset=" . DBConfig::CHARSET;
            self::$instance->pdo = new PDO($dsn, DBConfig::USER, DBConfig::PASSWORD, DBConfig::PDO_OPTIONS);
        }

        return self::$instance;
    }

    /**
     * Gets the instance of the PDO class.
     * @return PDO The PDO instance
     */
    public function pdo(): PDO
    {
        return $this->pdo;
    }

    /**
     * Prepares and executes the given SQL statement using PDO.
     * @param string $sql The SQL statement to run
     * @param array|null $args Array of parameters to prepare the statement with
     * @return PDOStatement The result of the query
     */
    public function run(string $sql, array $args = NULL): PDOStatement
    {
        if (!$args) {
            return $this->pdo->query($sql);
        }

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }
}