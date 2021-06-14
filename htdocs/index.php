<?php
include_once "admin/utility/IncludeSwitch.php";
include_once "homepage/config/HomepageActions.php";
include_once "common/utility/Settings.php";
include_once "common/config/PathConfig.php";

$actionSwitch = new IncludeSwitch(new HomepageActions());
$actionSwitch->include(HomepageActions::NONE);
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="mockup/res/css/frontend-style.css">

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?= PathConfig::IMAGE_PATH_FULL.Settings::get(SettingsConfig::FAVICON) ?>">
        <link rel="icon" type="image/png" href="<?= PathConfig::IMAGE_PATH_FULL.Settings::get(SettingsConfig::FAVICON) ?>" sizes="32x32">
        <link rel="icon" type="image/png" href="<?= PathConfig::IMAGE_PATH_FULL.Settings::get(SettingsConfig::FAVICON) ?>" sizes="96x96">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= PathConfig::IMAGE_PATH_FULL.Settings::get(SettingsConfig::FAVICON) ?>">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/mstile-144x144.png">
        <title><?=Settings::get(SettingsConfig::PAGE_TITLE)?></title>
    </head>
    <body>
    <?php

    include_once "homepage/block/NavbarBlock.php";

    include_once "homepage/block/BodyBlock.php";

    include_once "homepage/block/FooterBlock.php";

    include_once "homepage/blocktype/elements/ImprintModalTemplate.php";
    include_once "homepage/blocktype/elements/DataProtectionModalTemplate.php";

    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    </body>
</html>
