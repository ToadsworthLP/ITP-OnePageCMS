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

<div class="col content-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h1 class="display-4">Medienverwaltung</h1>
                    <p class="lead">Hier finden Sie eine Übersicht Ihrer Mediendateien die für Sie für Ihren Internetauftritt nutzen.</p>
                    <hr class="my-4">
                    <p>Brauchen Sie Hilfe? Eine genauere Beschreibung finden Sie unter folgendem Link.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="admin.php?page=7#v-pills-media" role="button" target="_blank">Medien<?php include 'admin/icon/HelpIcon.php'; ?></a>
                    </p>
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
                        <span class="h5">Datei hochladen</span>
                        <a class="btn btn-secondary reset-button help-button" href="admin.php?page=7#v-pills-media" target="_blank" type="submit" name="<?= $key ?>" value="" data-toggle="tooltip" data-placement="left" data-html="true" title="Brauchen Sie Hilfe?"><?php include 'mockup/inc/backend-panel/icons/help-icon.php'; ?></a>
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
                        <span class="h5">Medien-Bibliothek</span>
                        <a class="btn btn-secondary reset-button help-button" href="admin.php?page=7#v-pills-media" target="_blank" type="submit" name="<?= $key ?>" value="" data-toggle="tooltip" data-placement="left" data-html="true" title="Brauchen Sie Hilfe?"><?php include 'mockup/inc/backend-panel/icons/help-icon.php'; ?></a>
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