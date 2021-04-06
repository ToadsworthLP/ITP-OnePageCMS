<?php
include_once "admin/utility/ReturnUtility.php";
include_once "admin/utility/IncludeSwitch.php";
include_once "admin/config/AdminPages.php";
include_once "admin/config/AdminActions.php";

session_start();

ReturnUtility::update();

$actionSwitch = new IncludeSwitch(new AdminActions());
$pageSwitch = new IncludeSwitch(new AdminPages());
?>

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
    <link rel="stylesheet" href="mockup/res/css/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="htdocs/mockup/media/bootstrap-solid.svg">
    <link rel="icon" type="image/png" href="htdocs/mockup/media/bootstrap-solid.svg" sizes="32x32">
    <link rel="icon" type="image/png" href="htdocs/mockup/media/bootstrap-solid.svg" sizes="96x96">
    <link rel="apple-touch-icon" sizes="180x180" href="htdocs/mockup/media/bootstrap-solid.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
</head>
<body>
    <?php
        $actionSwitch->include(AdminActions::NONE); // Include action switch
        $pageSwitch->include(AdminPages::LOGIN); // Include page
    ?>
    <!-- Modal -->
    <?php
        include 'admin\template\MediaModal.php';
    ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Javascript -->
    <script src="mockup/res/js/navbar.js"></script>
</body>
</html>