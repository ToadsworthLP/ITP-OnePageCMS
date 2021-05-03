<?php
include_once "admin/block/NavbarBlock.php";
include_once "admin/block/AlertListBlock.php";
include_once "admin/block/MediaListBlock.php";
include_once "admin/block/MediaUploadBlock.php";
include_once "admin/block/MediaInfoModalBlock.php";

include "admin/utility/LoginRedirect.php";

Navbar();
MediaInfoModalBlock();

?>

<div class="col">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">Medienverwaltung</h1>
                        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Alerts -->
        <div class="row">
            <div class="col">
                <?= AlertListBlock(); ?>
            </div>
        </div>
        <!-- Content -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Datei hochladen
                    </div>
                    <div class="card-body">
                        <?= MediaUploadBlock(); ?>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Medien-Bibliothek
                    </div>
                    <div class="card-body">
                        <div class="row text-center text-lg-left">
                            <?= MediaListBlock(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="admin/js/mediaPage.js"></script>