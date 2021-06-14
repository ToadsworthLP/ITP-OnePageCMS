<?php
include_once "admin/block/NavbarBlock.php";
include_once "admin/block/AlertListBlock.php";
include_once "admin/block/GlobalSettingsBlock.php";

include "admin/utility/LoginRedirect.php";

Navbar();
?>

<div class="col content-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h1 class="display-4">Sonstiges</h1>
                    <p class="lead">Hier können Sie die gesetzlich verpflichtenden Informationen für Ihr Seitenimpressum und zur Einhaltung der Datenschutzverordnung anlegen.</p>
                    <hr class="my-4">
                    <p>Brauchen Sie Hilfe? Eine genauere Beschreibung finden Sie unter folgendem Link.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="admin.php?page=7#v-pills-misc" role="button" target="_blank">Hilfe<?php include 'admin/icon/HelpIcon.php'; ?></a>
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
                        <span class="h5">Impressum</span>
                        <a class="btn btn-secondary reset-button help-button"href="admin.php?page=7#v-pills-misc" target="_blank" type="submit" name="<?= $key ?>" value="" data-toggle="tooltip" data-placement="left" data-html="true" title="Brauchen Sie Hilfe?"><?php include 'mockup/inc/backend-panel/icons/help-icon.php'; ?></a>
                    </div>
                    <div class="card-body">
                        <?php
                            include 'admin/template/ImprintInformationForm.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <span class="h5">Datenschutzerklärung</span>
                        <a class="btn btn-secondary reset-button help-button" href="admin.php?page=7#v-pills-misc" target="_blank" type="submit" name="<?= $key ?>" value="" data-toggle="tooltip" data-placement="left" data-html="true" title="Brauchen Sie Hilfe?"><?php include 'mockup/inc/backend-panel/icons/help-icon.php'; ?></a>
                    </div>
                    <div class="card-body">
                        <?php
                            include 'admin/template/DataProtectionInformationForm.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
