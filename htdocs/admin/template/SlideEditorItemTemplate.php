<li id="slide-<?=$id?>" class="slider-list-item">
    <div class="accordion" id="slide-accordion-<?=$id?>">
        <div class="card">
            <div class="card-header" id="heading_1">
                <div class="row">
                    <div class="col-1 siteeditor-move-icon">
                        <?php include 'admin/icon/MoveIcon.php'; ?>
                    </div>
                    <div class="col">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-<?=$id?>" aria-expanded="true" aria-controls="#slide-accordion-<?=$id?>">
                                <?= $title ?>
                            </button>
                        </h2>
                    </div>
                    <div class="col-1">
                        <form method="post" action="admin.php?action=<?= AdminActions::DELETE_SLIDE ?>">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <button class="btn btn-light siteeditor-delete-button" type="submit" data-toggle="tooltip" data-placement="left" data-html="true" title="Slider entfernen">
                                <?php include 'admin/icon/DeleteIcon.php';?>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div id="collapse-<?=$id?>" class="collapse show" aria-labelledby="heading_1" data-parent="#slide-accordion-<?=$id?>">
                <form method="post" action="admin.php?&action=<?= AdminActions::EDIT_SLIDE ?>">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <br>
                                <div class="custom-file mb-3">
                                    <input id="<?=$id?>-slide-image" type="hidden" name="image" value="<?=$image != null ? $image->getID() : ""?>">
                                    <button title="Wählen Sie ein Bild für Ihren Slider Achten Sie darauf dass die Auflösung nicht zu hoch ist." id="<?=$id?>-slide-image-button" type="button" class="btn btn-block btn-secondary" data-toggle="modal"
                                            data-target="#media-selection-modal" onclick="setCurrentInputID('<?=$id?>-slide-image')">
                                        <?=$image != null ? $image->filename." ausgewählt" : "Sliderbild wählen"?>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label title="Die Überschrift wird in der Mitte des Sliders dargestellt." for="">Sliderüberschrift</label>
                                    <input type="text" class="form-control" name="title" value="<?= $title ?>" id="">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label title="Der Text wird unter der Überschrift dargestellt." for="exampleFormControlTextarea<?=$id?>">Slidertext</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea<?=$id?>" name="text" rows="1"><?= $text ?></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label title="Dieser Text steht in dem Button des Sliders." for="">Buttontext</label>
                                    <input type="text" class="form-control" name="buttonText" value="<?= $buttonText ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label title="Geben Sie hier den Link an zu dem dieser Button den Nutzer weiterleiten soll." for="">Buttonlink</label>
                                    <input type="text" class="form-control" name="buttonLink" value="<?= $buttonLink ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label title="Hier können Sie die Hauptfarbe des Buttons überschreiben falls diese mit dem Slider Bild zu einem Konflikt führt." for="<?=$id?>-button-color">Button-Farbe</label>
                                    <input type="color" class="form-control" id="<?=$id?>-button-color"
                                           name="buttonColor"
                                           value="<?= $buttonColor ?>">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label title="Hier können Sie die Sekundärfarbe überschreiben für ein farbliches Feedback." for="<?=$id?>-button-hover-color">Button-Hover-Farbe</label>
                                    <input type="color" class="form-control" id="<?=$id?>-button-hover-color"
                                           name="buttonHoverColor"
                                           value="<?= $buttonHoverColor ?>">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label title="Hier können Sie die Buttontext-Farbe anpassen." for="<?=$id?>-button-text-color">Button-Text-Farbe</label>
                                    <input type="color" class="form-control" id="<?=$id?>-button-text-color"
                                           name="buttonTextColor"
                                           value="<?= $buttonTextColor ?>">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-block btn-primary" type="submit">Slider speichern</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</li>
