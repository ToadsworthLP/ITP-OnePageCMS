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
                    <h1 class="display-4">Dashboard</h1>
                    <p class="lead">Hier können Sie globale Einstellung ihrer Website vornehmen. Denken Sie daran Ihre Änderungen im jeweiligen Abschnitt zu speichern.</p>
                    <hr class="my-4">
                    <p>Brauchen Sie Hilfe? Eine genauere Beschreibung finden Sie unter folgendem Link.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="admin.php?page=7#v-pills-dashboard" role="button" target="_blank">Allgemein<?php include 'admin/icon/HelpIcon.php'; ?></a>
                        <a class="btn btn-primary btn-lg" href="admin.php?page=7#v-pills-menu" role="button" target="_blank">Menü<?php include 'admin/icon/HelpIcon.php'; ?></a>
                        <a class="btn btn-primary btn-lg" href="admin.php?page=7#v-pills-footer" role="button" target="_blank">Footer<?php include 'admin/icon/HelpIcon.php'; ?></a>
                    </p>
                </div>
            </div>
        </div>
        <!-- Alerts -->
        <div class="row">
            <div class="col">
                <?php AlertListBlock(); ?>
            </div>
        </div>
        <!-- Content -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <span class="h5">Globale Einstellungen</span>
                        <button class="btn btn-secondary reset-button" type="submit" name="<?= $key ?>" value="" data-toggle="tooltip" data-placement="left" data-html="true" title="Hilfe"><?php include 'mockup/inc/backend-panel/icons/help-icon.php'; ?></button>
                    </div>
                    <div class="card-body">
                        <?php GlobalSettingsBlock(); ?>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div id="dashboard-menu" class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <span class="h5">Menü</span>
                        <button class="btn btn-secondary reset-button" type="submit" name="<?= $key ?>" value="" data-toggle="tooltip" data-placement="left" data-html="true" title="Hilfe"><?php include 'mockup/inc/backend-panel/icons/help-icon.php'; ?></button>
                    </div>
                    <div class="card-body">
                        <!-- Social Media Icon Liste -->
                        <?php
                            include 'admin/template/DashboardSocialMediaSettingsForm.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div id="dashboard-footer" class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <span class="h5">Footer</span>
                        <button class="btn btn-secondary reset-button" type="submit" name="<?= $key ?>" value="" data-toggle="tooltip" data-placement="left" data-html="true" title="Hilfe"><?php include 'mockup/inc/backend-panel/icons/help-icon.php'; ?></button>
                    </div>
                    <div class="card-body">
                        <?php
                            include 'admin/template/DashboardFooterSettingsForm.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="admin/js/mediaSelect.js"></script>
