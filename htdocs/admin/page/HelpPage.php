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
                    <h1 class="display-4">Hilfe</h1>
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
        <!-- Nav tabs -->
        <div class="row">
            <div class="col-lg-4">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-dashboard-tab" data-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">Allgemein</a>
                <a class="nav-link" id="v-pills-menu-tab" data-toggle="pill" href="#v-pills-menu" role="tab" aria-controls="v-pills-menu" aria-selected="false">Menü</a>
                <a class="nav-link" id="v-pills-footer-tab" data-toggle="pill" href="#v-pills-footer" role="tab" aria-controls="v-pills-footer" aria-selected="false">Footer</a>
                <a class="nav-link" id="v-pills-slider-tab" data-toggle="pill" href="#v-pills-slider" role="tab" aria-controls="v-pills-slider" aria-selected="false">Slider</a>
                <a class="nav-link" id="v-pills-editor-tab" data-toggle="pill" href="#v-pills-editor" role="tab" aria-controls="v-pills-editor" aria-selected="false">Seiteneditor</a>
                <a class="nav-link" id="v-pills-user-tab" data-toggle="pill" href="#v-pills-user" role="tab" aria-controls="v-pills-user" aria-selected="false">Benutzerverwaltung</a>
                <a class="nav-link" id="v-pills-media-tab" data-toggle="pill" href="#v-pills-media" role="tab" aria-controls="v-pills-media" aria-selected="false">Medien-Bibliothek</a>
                <a class="nav-link" id="v-pills-contact-tab" data-toggle="pill" href="#v-pills-contact" role="tab" aria-controls="v-pills-contact" aria-selected="false">Kontaktformular</a>
                <a class="nav-link" id="v-pills-misc-tab" data-toggle="pill" href="#v-pills-misc" role="tab" aria-controls="v-pills-misc" aria-selected="false">Sonstiges</a>
                </div>
            </div>
            <div class="col-lg-8 help-content">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashobar-tab">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h5">Allgemeine Seiteneinstellungen</span>
                                </div>
                                <div class="card-body">
                                    Text
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-menu" role="tabpanel" aria-labelledby="v-pills-menu-tab">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h5">Menüeinstellungen</span>
                                </div>
                                <div class="card-body">
                                    Text
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-footer" role="tabpanel" aria-labelledby="v-pills-footer-tab">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h5">Footer</span>
                                </div>
                                <div class="card-body">
                                    Text
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-slider" role="tabpanel" aria-labelledby="v-pills-slider-tab">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h5">Slider</span>
                                </div>
                                <div class="card-body">
                                    Text
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-editor" role="tabpanel" aria-labelledby="v-pills-editor-tab">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h5">Seiteneditor</span>
                                </div>
                                <div class="card-body">
                                    Text
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h5">Benutzerverwaltung</span>
                                </div>
                                <div class="card-body">
                                    Text
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-media" role="tabpanel" aria-labelledby="v-pills-media-tab">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h5">Medien-Bibliothek</span>
                                </div>
                                <div class="card-body">
                                    Text
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h5">Kontaktformular</span>
                                </div>
                                <div class="card-body">
                                    Text
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-misc" role="tabpanel" aria-labelledby="v-pills-misc-tab">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h5">Sonstiges</span>
                                </div>
                                <div class="card-body">
                                    Text
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="admin/js/mediaSelect.js"></script>
