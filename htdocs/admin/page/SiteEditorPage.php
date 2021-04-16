<?php
include_once "admin/block/NavbarBlock.php";
include_once "admin/block/AlertListBlock.php";
include_once "admin/block/SiteEditorItemBlock.php";

include "admin/utility/LoginRedirect.php";

Navbar();
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
        <div class="row">
            <div class="col">
                <button class="btn btn-lg btn-block btn-primary" type="submit">Reihenfolge speichern</button>
            </div>
        </div>
        <br>
        <!-- SECTIONB>LOCKS -->
        <ul class="list-group" id="siteeditor-item-list">
            <?php
                for($i = 0; $i < 6; $i ++){
                    SiteEditorItemBlock($i);
                }
            ?>
        </ul>
        <!-- ADD SECTION BUTTON -->
        <div class="row">
            <div class="col">
                <button id="add" class="btn btn-lg btn-block btn-secondary">+</button>
            </div>
        </div>
    </div>
</div>