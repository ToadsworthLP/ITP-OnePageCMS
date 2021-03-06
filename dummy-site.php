<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="htdocs/mockup/res/css/frontend-style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="htdocs/mockup/media/bootstrap-solid.svg">
    <link rel="icon" type="image/png" href="htdocs/mockup/media/bootstrap-solid.svg" sizes="32x32">
    <link rel="icon" type="image/png" href="htdocs/mockup/media/bootstrap-solid.svg" sizes="96x96">
    <link rel="apple-touch-icon" sizes="180x180" href="htdocs/mockup/media/bootstrap-solid.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <title>Seitentitel</title>
  </head>
  <body>
    <?php
        // Navbars
        // Navbar Left
        include 'htdocs/homepage/blocktype/navbars/navbar-1.php';

        // Navbar Centered
        // include 'htdocs/homepage/blocktype/navbars/navbar-2.php';
        
        // Slider
        include 'htdocs/homepage/blocktype/elements/slider.php';

        // Sectiontypes
        include 'htdocs/homepage/blocktype/sections/section-col-2.php';
        include 'htdocs/homepage/blocktype/sections/section-col-3.php';
        include 'htdocs/homepage/blocktype/sections/section-col-4.php';
        include 'htdocs/homepage/blocktype/sections/section-col-1-3.php';
        include 'htdocs/homepage/blocktype/sections/section-col-3-1.php';

        // Contact-Form
        include 'htdocs/homepage/blocktype/sections/section-col-1.php';

        // Footer
        include 'htdocs/homepage/blocktype/sections/section-footer.php';
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