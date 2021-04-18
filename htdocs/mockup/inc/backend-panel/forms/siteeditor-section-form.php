<form method="post" action="admin.php?&action=<?=AdminActions::EDIT_BLOCK?>">
    <div class="card-header">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1" hidden>#ID-Selektor</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="#ID-Selektor">
                </div>
            </div>
            <div class="col-3">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Volle Breite / Im Raster</label>
                </div>
            </div>
            <div class="col-3">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                    <label class="custom-control-label" for="customSwitch2">Im Menü anzeigen</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Hintergrundfarbe</label>
                    <input type="color" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
            </div>
            <div class="col-8">
                <div class="custom-file mb-3">
                    <button type="button" class="btn btn-block btn-secondary" data-toggle="modal" data-target="#mediaSelectionModal">
                        Hintergrundbild wählen
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="accordion" id="accordionHeading<?php echo $i; ?>">
                    <div class="card">
                        <div class="card-header" id="heading<?php echo $i; ?>">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseHeading<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseHeading<?php echo $i; ?>">
                                    Überschrift
                                </button>
                            </h2>
                        </div>

                        <div id="collapseHeading<?php echo $i; ?>" class="collapse show" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordionHeading<?php echo $i; ?>">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Überschrift</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Unterüberschrift</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Trennlinie</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Text unter Überschrift</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div>
    <!-- TODO Achtung hier werden IDs verwendet diese sollten noch die Section ID oder Nummer erhalten damit ein Klick nicht alle anspricht -->
    <div class="card-body">
        <div class="row">
            <div class="col">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <!-- TODO Symbole statt Zahlen -->
                    <a class="nav-link active" id="nav-column-1" data-toggle="tab" href="#column-1" role="tab" aria-controls="nav-home" aria-selected="true">1</a>
                    <a class="nav-link" id="nav-column-2" data-toggle="tab" href="#column-2" role="tab" aria-controls="nav-profile" aria-selected="false">2</a>
                    <a class="nav-link" id="nav-column-3" data-toggle="tab" href="#column-3" role="tab" aria-controls="nav-contact" aria-selected="false">3</a>
                    <a class="nav-link" id="nav-column-4" data-toggle="tab" href="#column-4" role="tab" aria-controls="nav-home" aria-selected="false">4</a>
                    <a class="nav-link" id="nav-column-5" data-toggle="tab" href="#column-5" role="tab" aria-controls="nav-profile" aria-selected="false">5</a>
                    <a class="nav-link" id="nav-column-6" data-toggle="tab" href="#column-6" role="tab" aria-controls="nav-contact" aria-selected="false">6</a>
                </div>
            </nav>
            <div class="tab-content col" id="nav-tabContent">
                <div class="tab-pane fade show active" id="column-1" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-12 column-background">
                            <!-- kleines Formular mit Titel, Text, Button und Bild  -->
                            <p>1/1</p>
                            <?php
                                include 'admin/template/SiteEditorColumnTemplate.php';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="column-2" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-lg-6 column-background">
                            <p>1/2</p>
                            <?php
                                include 'admin/template/SiteEditorColumnTemplate.php';
                            ?>
                        </div>
                        <div class="col-lg-6 column-background">
                            <p>1/2</p>
                            <?php
                                include 'admin/template/SiteEditorColumnTemplate.php';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="column-3" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                        <div class="col-lg-4 column-background">
                            <p>1/3</p>
                            <?php
                                include 'admin/template/SiteEditorColumnTemplate.php';
                            ?>
                        </div>
                        <div class="col-lg-4 column-background">
                            <p>1/3</p>
                            <?php
                                include 'admin/template/SiteEditorColumnTemplate.php';
                            ?>
                        </div>
                        <div class="col-lg-4 column-background">
                            <p>1/3</p>
                            <?php
                                include 'admin/template/SiteEditorColumnTemplate.php';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="column-4" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-lg-3 column-background">
                            <p>1/4</p>
                            <?php
                                include 'admin/template/SiteEditorColumnTemplate.php';
                            ?>
                        </div>
                        <div class="col-lg-3 column-background">
                            <p>1/4</p>
                            <?php
                                include 'admin/template/SiteEditorColumnTemplate.php';
                            ?>
                        </div>
                        <div class="col-lg-3 column-background">
                            <p>1/4</p>
                            <?php
                                include 'admin/template/SiteEditorColumnTemplate.php';
                            ?>
                        </div>
                        <div class="col-lg-3 column-background">
                            <p>1/4</p>
                            <?php
                                include 'admin/template/SiteEditorColumnTemplate.php';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="column-5" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                        <div class="col-lg-9 column-background">
                            <p>2/3</p>
                            <?php
                                include 'admin/template/SiteEditorColumnTemplate.php';
                            ?>
                        </div>
                        <div class="col-lg-3 column-background">
                            <p>1/3</p>
                            <?php
                                include 'admin/template/SiteEditorColumnTemplate.php';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="column-6" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-lg-3 column-background">
                            <p>1/3</p>
                            <?php
                                include 'admin/template/SiteEditorColumnTemplate.php';
                            ?>
                        </div>
                        <div class="col-lg-9 column-background">
                            <p>2/3</p>
                            <?php
                                include 'admin/template/SiteEditorColumnTemplate.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</form>