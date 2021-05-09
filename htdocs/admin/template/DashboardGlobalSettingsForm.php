<form method="post" action="admin.php?&action=<?= AdminActions::UPDATE_SETTINGS ?>">
    <h5>Seiteninformation</h5>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleFormControlInput1">Seitentitel</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                       name="<?= SettingsConfig::PAGE_TITLE ?>"
                       value="<?= Settings::get(SettingsConfig::PAGE_TITLE) ?>">
                <?php SettingsResetButton(SettingsConfig::PAGE_TITLE) ?>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-check">
                <input type="hidden" name="<?= SettingsConfig::FULL_WIDTH ?>" value="0">
                <input class="form-check-input" type="checkbox" value="<?= true ?>" id="defaultCheck1"
                       name="<?= SettingsConfig::FULL_WIDTH ?>"
                    <?= Settings::getBoolean(SettingsConfig::FULL_WIDTH) ? "checked" : "" ?>>
                <label class="form-check-label" for="defaultCheck1">
                    Volle Breite / In Grid
                </label>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Seitenbeschreibung</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                          name="<?= SettingsConfig::PAGE_DESCRIPTION ?>"><?= Settings::get(SettingsConfig::PAGE_DESCRIPTION) ?></textarea>
            </div>
            <?php SettingsResetButton(SettingsConfig::PAGE_DESCRIPTION) ?>
        </div>
    </div>
    <hr>
    <h5>Farben</h5>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <input class="form-control" type="color" value="#5bd6b5">
                <label for="exampleInputEmail1">Primärfarbe</label>
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <input class="form-control" type="color" value="#39C19B">
                <label for="exampleInputEmail1">Sekundärfarbe</label>
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <input class="form-control" type="color" value="#f8f9fa">
                <label for="exampleInputEmail1">Heller Hintergrund</label>
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <input class="form-control" type="color" value="#2D3331">
                <label for="exampleInputEmail1">Dunkler Hintergrund</label>
            </div>
        </div>
        <div class="col-sm">
            <button type="submit" class="btn btn-primary btn-block">Zurücksetzen</button>
        </div>
    </div>
    <hr>
    <h5>Logo</h5>
    <div class="row">
        <div class="col">
            <label>Menü-Logo</label>
        </div>
        <div class="col-xl-10">
            <div class="custom-file mb-3">
                <div class="custom-file">
                    <button id="<?= $id ?>-background-image-button" type="button" class="btn btn-block btn-secondary"
                            data-toggle="modal"
                            data-target="#media-selection-modal"
                            onclick="setCurrentInputID('<?= $id ?>-background-image')">
                        Hintergrundbild wählen
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label>Footer-Logo</label>
        </div>
        <div class="col-xl-10">
            <div class="custom-file mb-3">
                <div class="custom-file">
                    <button id="<?= $id ?>-background-image-button" type="button" class="btn btn-block btn-secondary"
                            data-toggle="modal"
                            data-target="#media-selection-modal"
                            onclick="setCurrentInputID('<?= $id ?>-background-image')">
                        Hintergrundbild wählen
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label>Favicon</label>
        </div>
        <div class="col-xl-10">
            <div class="custom-file mb-3">
                <div class="custom-file">
                    <button id="<?= $id ?>-background-image-button" type="button" class="btn btn-block btn-secondary"
                            data-toggle="modal"
                            data-target="#media-selection-modal"
                            onclick="setCurrentInputID('<?= $id ?>-background-image')">
                        Hintergrundbild wählen
                    </button>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-block btn-primary">Änderungen speichern</button>
        </div>
    </div>
</form>
