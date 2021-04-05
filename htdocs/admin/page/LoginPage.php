<?php
include_once "admin/block/NavbarBlock.php";
include_once "admin/block/LoginBlock.php";
include_once "admin/config/AdminPages.php";
include_once "admin/block/AlertListBlock.php";
?>

<!-- Alerts -->
<div class="row">
    <div class="col">
        <?= AlertListBlock(); ?>
    </div>
</div>

<?= Login(); ?>