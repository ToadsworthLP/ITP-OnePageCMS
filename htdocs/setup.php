<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css" integrity="sha512-72McA95q/YhjwmWFMGe8RI3aZIMCTJWPBbV8iQY3jy1z9+bi6+jHnERuNrDPo/WGYEzzNs4WdHNyyEr/yXJ9pA==" crossorigin="anonymous" />

    <!-- DE-PRESS-CSS -->
    <link rel="stylesheet" href="mockup/res/css/navbar-style.css">
    <link rel="stylesheet" href="mockup/res/css/user-mobile-table-style.css">
    <link rel="stylesheet" href="mockup/res/css/backend-panel-style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="mockup/media/de-press-icon-colored.svg">
    <link rel="icon" type="image/png" href="mockup/media/de-press-icon-colored.svg" sizes="32x32">
    <link rel="icon" type="image/png" href="mockup/media/de-press-icon-colored.svg" sizes="96x96">
    <link rel="apple-touch-icon" sizes="180x180" href="mockup/media/de-press-icon-colored.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="mockup/media/de-press-icon-colored.svg">
</head>
<body>

<!-- JQuery -->
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

<?php
include "common/utility/DB.php";

const SETUP_USERNAME = "root";
const SETUP_PASSWORD = "";

function runSetup() {
    $dsn = "mysql:host=" . DBConfig::HOST . ";port=" . DBConfig::PORT . ";dbname=" . "test" . ";charset=" . DBConfig::CHARSET;
    $pdo = new PDO($dsn, SETUP_USERNAME, SETUP_PASSWORD, DBConfig::PDO_OPTIONS);

    // User account and database setup

    $userSQL = "CREATE USER '". DBConfig::USER ."'@'localhost' IDENTIFIED VIA mysql_native_password USING PASSWORD('". DBConfig::PASSWORD ."')";
    $globalPermsSQL = "GRANT USAGE ON *.* TO '". DBConfig::USER ."'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0";
    $dbSQL = "CREATE DATABASE IF NOT EXISTS `". DBConfig::DATABASE ."`";
    $dbPermsSQL = "GRANT ALL PRIVILEGES ON `". DBConfig::DATABASE ."`.* TO '". DBConfig::USER ."'@'localhost'";

    $pdo->exec($userSQL);
    $pdo->exec($globalPermsSQL);
    $pdo->exec($dbSQL);
    $pdo->exec($dbPermsSQL);

    // Import DB dump

    $dumpedSQL = file_get_contents("default.sql");
    $pdo->exec($dumpedSQL);
}

if(isset($_GET["run"])) {
    $alreadySetup = true;

    try {
        $db = DB::get();
    } catch (PDOException $e) {
        runSetup();
        $alreadySetup = false;
    }

    if($alreadySetup) {
        include "setup/failure.php";
    } else {
        include "setup/success.php";
    }
} else {
    include "setup/welcome.php";
}

?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
