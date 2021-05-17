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
                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                    <hr class="my-4">
                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
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
                        Globale Einstellungen
                    </div>
                    <div class="card-body">
                        <?php GlobalSettingsBlock(); ?>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Menü
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
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Footer
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
