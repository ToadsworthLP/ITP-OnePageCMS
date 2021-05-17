<?php
include_once "admin/block/NavbarBlock.php";
include_once "admin/block/AlertListBlock.php";
include_once "admin/block/SiteEditorBlock.php";
include_once "admin/block/SlideEditorBlock.php";
include_once "admin/block/MediaSelectionModalBlock.php";
include_once "admin/block/SettingsResetButtonBlock.php";
include_once "common/utility/Settings.php";

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
                    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
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
                        Slider
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
                                    <button type="submit" id="add" class="btn btn-lg btn-block btn-secondary">+</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Seiteninhalt
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
                                    <button type="submit" id="add" class="btn btn-lg btn-block btn-secondary">+</button>
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
