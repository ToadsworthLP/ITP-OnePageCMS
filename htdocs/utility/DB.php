<?php

class DB
{
    private static string $host = "127.0.0.1";
    private static int $port = 3306;
    private static string $database = "de-press";
    private static string $user = "de-press";
    private static string $password = "17647d7db769f2d9ccbd418ace75f3e1";
    private static string $charset = "utf8mb4";

    private static array $pdoOptions = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    private static DB $instance;

    private PDO $pdo;

    /**
     * Gets the instance of the DB class to be used.
     * If none exists, a new one will be created and then returned.
     * @return DB The instance of the DB class
     */
    public static function get() : DB {
        if(self::$instance == null) {
            self::$instance = new self();

            $dsn = "mysql:host=".self::$host.";port=".self::$port.";dbname=".self::$database.";charset=".self::$charset;
            self::$instance->pdo = new PDO($dsn, self::$user, self::$password, self::$pdoOptions);
        }

        return self::$instance;
    }

    /**
     * Gets the instance of the PDO class.
     * @return PDO The PDO instance
     */
    public function pdo() : PDO {
        return $this->pdo;
    }

    /**
     * Prepares and executes the given SQL statement using PDO.
     * @param string $sql The SQL statement to run
     * @param array|null $args Array of parameters to prepare the statement with
     * @return PDOStatement The result of the query
     */
    public function run(string $sql, array $args = NULL) : PDOStatement {
        if (!$args) {
            return $this->pdo->query($sql);
        }

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }
}