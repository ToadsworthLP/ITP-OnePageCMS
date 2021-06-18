<?php
include "common/utility/DB.php";

function runSetup() {
    $dsn = "mysql:host=" . DBConfig::HOST . ";port=" . DBConfig::PORT . ";dbname=" . "test" . ";charset=" . DBConfig::CHARSET;
    $pdo = new PDO($dsn, "root", "", DBConfig::PDO_OPTIONS);

    $userSQL = "CREATE USER '". DBConfig::USER ."'@'localhost' IDENTIFIED VIA mysql_native_password USING PASSWORD('". DBConfig::PASSWORD ."')";
    $globalPermsSQL = "GRANT USAGE ON *.* TO '". DBConfig::USER ."'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0";
    $dbSQL = "CREATE DATABASE IF NOT EXISTS `". DBConfig::DATABASE ."`";
    $dbPermsSQL = "GRANT ALL PRIVILEGES ON `". DBConfig::DATABASE ."`.* TO '". DBConfig::USER ."'@'localhost'";

    $pdo->exec($userSQL);
    $pdo->exec($globalPermsSQL);
    $pdo->exec($dbSQL);
    $pdo->exec($dbPermsSQL);
}

$alreadySetup = true;

try {
    $db = DB::get();
} catch (PDOException $e) {
    runSetup();
    $alreadySetup = false;
}

if($alreadySetup) {
    echo    "Das Setup wurde bereits ausgeführt und kann nicht erneut ausgeführt werden.
            Besuchen sie das <a href='/admin.php'>Admin Panel</a>, um ihre Seite zu konfigurieren.";
} else {
    echo    "Das Setup wurde erfolgreich ausgeführt.
            Besuchen sie das <a href='/admin.php'>Admin Panel</a>, um ihre Seite zu konfigurieren.";
}
