<?php
include_once "admin/block/NavbarBlock.php";
include_once "admin/block/AlertListBlock.php";
include_once "admin/block/SiteEditorBlock.php";

include "admin/utility/LoginRedirect.php";

Navbar();

$site = 1;

?>

<div class="col">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">Seiteneditor</h1>
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
        <br>
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