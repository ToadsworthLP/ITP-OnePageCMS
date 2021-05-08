<?php
include_once "admin/block/NavbarBlock.php";
include_once "admin/block/AlertListBlock.php";
include_once "admin/block/AddUserBlock.php";
include_once "admin/block/EditUserBlock.php";
include_once "admin/block/UserTableBlock.php";
include_once "admin/utility/AccountUtility.php";
include_once "admin/utility/RequirePermissions.php";
include_once "admin/config/PermissionConfig.php";

include "admin/utility/LoginRedirect.php";
RequirePermissions(PermissionConfig::ADMIN, AdminPages::DASHBOARD);

Navbar();
?>

<div class="col content-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h1 class="display-4">Benutzer</h1>
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
        <!-- Add user -->
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
        <?php if(isset($_GET["editSelf"])): ?>
            <!-- Edit user -->
            <br>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Eigenes Profil bearbeiten
                        </div>
                        <div class="card-body">
                            <?= EditUserBlock(AccountUtility::getCurrentUser()); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if(isset($_POST["targetUser"]) && $_POST["targetUser"] !== ""): ?>
        <!-- Edit user -->
        <br>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Benutzer bearbeiten
                    </div>
                    <div class="card-body">
                        <?= EditUserBlock(UserGateway::fetch(["id" => $_POST["targetUser"]])); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <br>
        <div class="row user-table-desktop">
            <div class="col">
                <?= UserTable(false); ?>
            </div>
        </div>
        <div class="row user-table-mobile">
            <div class="col">
                <?= UserTable(true); ?>
            </div>
        </div>
    </div>
</div>
