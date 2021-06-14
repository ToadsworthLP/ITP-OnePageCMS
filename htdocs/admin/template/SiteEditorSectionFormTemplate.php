<form method="post" action="admin.php?&action=<?= AdminActions::EDIT_BLOCK ?>">
    <input type="hidden" name="_targetBlock" value="<?=$id?>">
    <input type="hidden" name="_template" id="selectedTemplate-<?=$id?>" value="<?= $type ?>">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label title="Geben Sie einen gewünschten Selektor an. Dieser wird zum verlinken verwendet. Achten Sie darauf dass dieser einzigartig ist und keine Sonderzeichen enthält. Geben Sie keinen an so wird automatisch einer erstellt." for="selectorInput<?=$id?>" hidden>#ID-Selektor</label>
                                    <input type="text" class="form-control" id="selectorInput<?=$id?>"
                                           name="selector"
                                           placeholder="#ID-Selektor" value="<?=$attributes->get("selector")?>">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="custom-control custom-switch">
                                    <input type="hidden" name="fullwidth" value="">
                                    <input type="checkbox" class="custom-control-input" id="fullwidthchecker<?=$id?>" name="fullwidth" value="1"
                                        <?=$attributes->get("fullwidth") == "" ? "" : "checked"?>>
                                    <label title="Geben Sie an ob sich diese Sektion über die volle Breite Ihres Bildschirmes erstrecken soll. Dies hat keinen Einfluss auf den Inhalt der Sektion." class="custom-control-label" for="fullwidthchecker<?=$id?>">Volle Breite</label>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="custom-control custom-switch">
                                    <input type="hidden" name="menu-option" value="">
                                    <input type="checkbox" class="custom-control-input" id="showInMenu<?=$id?>" name="menu-option" value="1"
                                        <?=$attributes->get("menu-option") == "" ? "" : "checked"?>>
                                    <label title="Geben Sie hier an ob zu dieser Sektion ein Menüpunkt in der Navigationsleiste hinzugefügt werden soll." class="custom-control-label" for="showInMenu<?=$id?>">Im Menü anzeigen</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label title="Wählen Sie eine Hintergrund farbe für diese Sektion. Lassen Sie das Feld leer so wird die Farbe automatisch von den globalen Einstellungen übernommen." for="backGroundColors<?=$id?>">Hintergrundfarbe</label>
                                    <input type="color" class="form-control" id="backGroundColors<?=$id?>"
                                           name="background-color"
                                           value="<?=$attributes->get("background-color", "#ffffff")?>">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="custom-file mb-3">
                                    <input id="<?=$id?>-background-image" type="hidden" name="@background-image" value="<?=$attributes->get("background-image")?>">
                                    <button title="Hier können Sie ein Hintergrundbild für die Sektion wählen. Dieses füllt die gesamte Breite der Sektion aus." id="<?=$id?>-background-image-button" type="button" class="btn btn-block btn-secondary" data-toggle="modal"
                                            data-target="#media-selection-modal" onclick="setCurrentInputID('<?=$id?>-background-image')">
                                        <?=isset($images["background-image"]) != null ? $images["background-image"]->filename." ausgewählt" : "Hintergrundbild wählen"?>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="accordion" id="accordionHeading<?=$id?>">
                                    <div class="card">
                                        <div class="card-header" id="heading<?=$id?>">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left" type="button"
                                                        data-toggle="collapse"
                                                        data-target="#collapseHeading<?=$id?>"
                                                        aria-expanded="true"
                                                        aria-controls="collapseHeading<?=$id?>">
                                                    Überschrift
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseHeading<?=$id?>" class="collapse show"
                                             aria-labelledby="heading<?=$id?>"
                                             data-parent="#accordionHeading<?=$id?>">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label title="Hier können Sie eine Überschrift für die Sektion eintragen." for="sectionHeading<?=$id?>">Überschrift</label>
                                                            <input type="text" class="form-control"
                                                                   id="sectionHeading<?=$id?>" placeholder=""
                                                                   name="title"
                                                                   value="<?=$attributes->get("title")?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label title="Hier können Sie eine Unterüberschrift für diese Sektion eintragen." for="sectionSubheading<?=$id?>">Unterüberschrift</label>
                                                            <input type="text" class="form-control"
                                                                   id="sectionSubheading<?=$id?>" placeholder=""
                                                                   name="subtitle"
                                                                   value="<?=$attributes->get("subtitle")?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group form-check">
                                                            <input type="hidden" name="separator" value="">
                                                            <input type="checkbox" class="form-check-input"
                                                                   id="hairline<?=$id?>" name="separator" value="1"
                                                                <?=$attributes->get("separator") == "" ? "" : "checked"?>>
                                                            <label title="Hier können Sie eine dekorative Trennlinie anzeigen lassen." class="form-check-label" for="hairline<?=$id?>">Trennlinie</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label title="Geben Sie hier einen Text für diese Sektion an." for="headingParagraph<?=$id?>">Text unter
                                                                Überschrift</label>
                                                            <textarea class="form-control"
                                                                      id="headingParagraph<?=$id?>"
                                                                      rows="3" 
                                                                      name="textarea"><?=$attributes->get("textarea")?></textarea>
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-link <?= $type === 1 ? "active" : "" ?>" id="nav-column-1-<?=$id?>" data-toggle="tab" href="#column-1-<?=$id?>"
                                           role="tab" aria-controls="nav-home" aria-selected="true" onclick="setTemplate(<?=$id?>, 1)"><img class="column-layout-icon" src="mockup/media/Column-Icons-01.svg"></a>
                                        <a class="nav-link <?= $type === 2 ? "active" : "" ?>" id="nav-column-2-<?=$id?>" data-toggle="tab" href="#column-2-<?=$id?>"
                                           role="tab" aria-controls="nav-profile-<?=$id?>" aria-selected="false" onclick="setTemplate(<?=$id?>, 2)"><img class="column-layout-icon" src="mockup/media/Column-Icons-02.svg"></a>
                                        <a class="nav-link <?= $type === 3 ? "active" : "" ?>" id="nav-column-3-<?=$id?>" data-toggle="tab" href="#column-3-<?=$id?>"
                                           role="tab" aria-controls="nav-contact-<?=$id?>" aria-selected="false" onclick="setTemplate(<?=$id?>, 3)"><img class="column-layout-icon" src="mockup/media/Column-Icons-03.svg"></a>
                                        <a class="nav-link <?= $type === 4 ? "active" : "" ?>" id="nav-column-4-<?=$id?>" data-toggle="tab" href="#column-4-<?=$id?>"
                                           role="tab" aria-controls="nav-home-<?=$id?>" aria-selected="false" onclick="setTemplate(<?=$id?>, 4)"><img class="column-layout-icon" src="mockup/media/Column-Icons-04.svg"></a>
                                        <a class="nav-link <?= $type === 5 ? "active" : "" ?>" id="nav-column-5-<?=$id?>" data-toggle="tab" href="#column-5-<?=$id?>"
                                           role="tab" aria-controls="nav-profile-<?=$id?>" aria-selected="false" onclick="setTemplate(<?=$id?>, 5)"><img class="column-layout-icon" src="mockup/media/Column-Icons-05.svg"></a>
                                        <a class="nav-link <?= $type === 6 ? "active" : "" ?>" id="nav-column-6-<?=$id?>" data-toggle="tab" href="#column-6-<?=$id?>"
                                           role="tab" aria-controls="nav-contact-<?=$id?>" aria-selected="false" onclick="setTemplate(<?=$id?>, 6)"><img class="column-layout-icon" src="mockup/media/Column-Icons-06.svg"></a>
                                    </div>
                                </nav>
                                <div class="tab-content col" id="nav-tabContent-<?=$id?>">
                                    <div class="tab-pane fade <?= $type === 1 ? "show active" : "" ?>" id="column-1-<?=$id?>" role="tabpanel"
                                         aria-labelledby="nav-home-tab-<?=$id?>">
                                        <div class="row">
                                            <div class="col-12 column-background">
                                                <!-- kleines Formular mit Titel, Text, Button und Bild  -->
                                                <p>1/1</p>
                                                <?php
                                                    $prefix = "1-1";
                                                    include 'admin/template/SiteEditorColumnTemplate.php';
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade <?= $type === 2 ? "show active" : "" ?>" id="column-2-<?=$id?>" role="tabpanel"
                                         aria-labelledby="nav-profile-tab-<?=$id?>">
                                        <div class="row">
                                            <div class="col-lg-6 column-background">
                                                <p>1/2</p>
                                                <?php
                                                    $prefix = "2-1";
                                                    include 'admin/template/SiteEditorColumnTemplate.php';
                                                ?>
                                            </div>
                                            <div class="col-lg-6 column-background">
                                                <p>1/2</p>
                                                <?php
                                                    $prefix = "2-2";
                                                    include 'admin/template/SiteEditorColumnTemplate.php';
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade <?= $type === 3 ? "show active" : "" ?>" id="column-3-<?=$id?>" role="tabpanel"
                                         aria-labelledby="nav-contact-tab-<?=$id?>">
                                        <div class="row">
                                            <div class="col-lg-4 column-background">
                                                <p>1/3</p>
                                                <?php
                                                    $prefix = "3-1";
                                                    include 'admin/template/SiteEditorColumnTemplate.php';
                                                ?>
                                            </div>
                                            <div class="col-lg-4 column-background">
                                                <p>1/3</p>
                                                <?php
                                                    $prefix = "3-2";
                                                    include 'admin/template/SiteEditorColumnTemplate.php';
                                                ?>
                                            </div>
                                            <div class="col-lg-4 column-background">
                                                <p>1/3</p>
                                                <?php
                                                    $prefix = "3-3";
                                                    include 'admin/template/SiteEditorColumnTemplate.php';
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade <?= $type === 4 ? "show active" : "" ?>" id="column-4-<?=$id?>" role="tabpanel"
                                         aria-labelledby="nav-profile-tab-<?=$id?>">
                                        <div class="row">
                                            <div class="col-lg-3 column-background">
                                                <p>1/4</p>
                                                <?php
                                                    $prefix = "4-1";
                                                    include 'admin/template/SiteEditorColumnTemplate.php';
                                                ?>
                                            </div>
                                            <div class="col-lg-3 column-background">
                                                <p>1/4</p>
                                                <?php
                                                    $prefix = "4-2";
                                                    include 'admin/template/SiteEditorColumnTemplate.php';
                                                ?>
                                            </div>
                                            <div class="col-lg-3 column-background">
                                                <p>1/4</p>
                                                <?php
                                                    $prefix = "4-3";
                                                    include 'admin/template/SiteEditorColumnTemplate.php';
                                                ?>
                                            </div>
                                            <div class="col-lg-3 column-background">
                                                <p>1/4</p>
                                                <?php
                                                    $prefix = "4-4";
                                                    include 'admin/template/SiteEditorColumnTemplate.php';
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade <?= $type === 5 ? "show active" : "" ?>" id="column-5-<?=$id?>" role="tabpanel"
                                         aria-labelledby="nav-contact-tab-<?=$id?>">
                                        <div class="row">
                                            <div class="col-lg-8 column-background">
                                                <p>2/3</p>
                                                <?php
                                                    $prefix = "5-1";
                                                    include 'admin/template/SiteEditorColumnTemplate.php';
                                                ?>
                                            </div>
                                            <div class="col-lg-4 column-background">
                                                <p>1/3</p>
                                                <?php
                                                    $prefix = "5-2";
                                                    include 'admin/template/SiteEditorColumnTemplate.php';
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade <?= $type === 6 ? "show active" : "" ?>" id="column-6-<?=$id?>" role="tabpanel"
                                         aria-labelledby="nav-profile-tab-<?=$id?>">
                                        <div class="row">
                                            <div class="col-lg-4 column-background">
                                                <p>1/3</p>
                                                <?php
                                                    $prefix = "6-1";
                                                    include 'admin/template/SiteEditorColumnTemplate.php';
                                                ?>
                                            </div>
                                            <div class="col-lg-8 column-background">
                                                <p>2/3</p>
                                                <?php
                                                    $prefix = "6-2";
                                                    include 'admin/template/SiteEditorColumnTemplate.php';
                                                ?>
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
        <br>
        <div class="row">
            <div class="col">
                <button class="btn btn-block btn-primary" type="submit">Abschnitt speichern</button>
            </div>
        </div>
    </div>
</form>
