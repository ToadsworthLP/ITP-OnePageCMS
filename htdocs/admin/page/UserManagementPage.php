<?php
include_once "admin/block/NavbarBlock.php";
include_once "admin/block/AlertListBlock.php";
include_once "admin/block/AddUserBlock.php";
include_once "admin/block/UserTableBlock.php";

include "admin/utility/LoginRedirect.php";

Navbar();
?>

<div class="col">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">Benutzerverwaltung</h1>
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
                        Neuen Benutzer anlegen
                    </div>
                    <div class="card-body">
                        <?= AddUserBlock(); ?>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row user-table-desktop">
            <div class="col">
                <?= UserTable(); ?>
            </div>
        </div>
        <div class="row user-table-mobile">
            <div class="col">
                <?php
                // TODO ask why this is even necessary, and implement it if it really is
                //include 'inc/backend-panel/elements/user-list-mobile.php';
                ?>
            </div>
        </div>
    </div>
</div>
