<?php
include_once "admin/block/NavbarBlock.php";
include_once "admin/block/AlertListBlock.php";
include_once "admin/block/SiteEditorBlock.php";
include_once "admin/block/SlideEditorBlock.php";
include_once "admin/block/MediaSelectionModalBlock.php";
include_once "admin/block/SettingsResetButtonBlock.php";

include "admin/utility/LoginRedirect.php";

Navbar();
MediaSelectionModalBlock();

$site = 1;

?>

<div class="col content-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h1 class="display-4">Seiteneditor</h1>
                    <p class="lead">Hier können Sie den Inhalt und die Gestalung Ihres Webauftirtts bearbeiten. Es lassen sich beliebig viele Slider und Seitenelemente hinzufügen um Ihren Bedürfnissen gerecht zu werden.</p>
                    <hr class="my-4">
                    <p>Brauchen Sie Hilfe? Eine genauere Beschreibung finden Sie unter folgendem Link.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="admin.php?page=7#v-pills-slider" role="button" target="_blank">Slider<?php include 'admin/icon/HelpIcon.php'; ?></a>
                        <a class="btn btn-primary btn-lg" href="admin.php?page=7#v-pills-editor" role="button" target="_blank">Editor<?php include 'admin/icon/HelpIcon.php'; ?></a>
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
        <div id="siteeditor-slider" class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <span class="h5">Slider</span>
                        <button class="btn btn-secondary reset-button" type="submit" name="<?= $key ?>" value="" data-toggle="tooltip" data-placement="left" data-html="true" title="Hilfe"><?php include 'mockup/inc/backend-panel/icons/help-icon.php'; ?></button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php include 'admin/template/SlideEditorMainSettingsForm.php'; ?>
                        </div>
                        <ul class="list-group" id="slider-item-list">
                            <?= SlideEditorBlock() ?>
                        </ul>
                        <div class="row">
                            <div class="col">
                                <form method="post" action="admin.php?action=<?= AdminActions::ADD_SLIDE ?>">
                                    <input type="hidden" name="id" value="<?= $site ?>">
                                    <button type="submit" id="addSlider" class="btn btn-lg btn-block btn-secondary">+</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div id="siteeditor-editor" class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <span class="h5">Seiteninhalt</span>
                        <button class="btn btn-secondary reset-button" type="submit" name="<?= $key ?>" value="" data-toggle="tooltip" data-placement="left" data-html="true" title="Hilfe"><?php include 'mockup/inc/backend-panel/icons/help-icon.php'; ?></button>
                    </div>
                    <div class="card-body">
                        <!-- SECTION BLOCKS -->
                        <ul class="list-group" id="siteeditor-item-list">
                            <?= SiteEditorBlock() ?>
                        </ul>
                        <!-- ADD SECTION BUTTON -->
                        <div class="row">
                            <div class="col">
                                <form method="post" action="admin.php?action=<?= AdminActions::ADD_BLOCK ?>">
                                    <input type="hidden" name="targetSite" value="<?= $site ?>">
                                    <button type="submit" id="addSiteblock" class="btn btn-lg btn-block btn-secondary">+</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>   
    </div>
</div>
<script src="admin/js/mediaSelect.js"></script>
<script src="admin/js/siteEditor.js"></script>
