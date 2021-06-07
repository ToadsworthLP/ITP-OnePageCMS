<?php
include_once "admin/block/NavbarBlock.php";
include_once "admin/block/AlertListBlock.php";
include_once "admin/block/SettingsResetButtonBlock.php";

include "admin/utility/LoginRedirect.php";

Navbar();
?>

<div class="col content-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h1 class="display-4">Kontaktformular</h1>
                    <p class="lead">Hier können Sie die Kontaktinformationen für Ihr automatischen Nachrichten des Kontaktformulars angeben und die Adresse von der aus gesendet werden soll.</p>
                    <hr class="my-4">
                    <p>Brauchen Sie Hilfe? Eine genauere Beschreibung finden Sie unter folgendem Link.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="admin.php?page=7#v-pills-contact" role="button" target="_blank">Hilfe<?php include 'admin/icon/HelpIcon.php'; ?></a>
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
                        <span class="h5">Formulardaten</span>
                        <button class="btn btn-secondary reset-button" type="submit" name="<?= $key ?>" value="" data-toggle="tooltip" data-placement="left" data-html="true" title="Hilfe"><?php include 'mockup/inc/backend-panel/icons/help-icon.php'; ?></button>
                    </div>
                    <div class="card-body">
                        <div class="col">
                            <?php include 'admin/template/ContactInformationSettingsForm.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
