<form method="post" action="admin.php?&action=<?= AdminActions::UPDATE_SETTINGS ?>">
    <h5>Seiteninformation</h5>
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label for="exampleFormControlInput1">Seitentitel</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                       name="<?= SettingsConfig::PAGE_TITLE ?>"
                       value="<?= Settings::get(SettingsConfig::PAGE_TITLE) ?>">
                <br>
                <?php SettingsResetButton(SettingsConfig::PAGE_TITLE) ?>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-check">
                <input type="hidden" name="<?= SettingsConfig::FULL_WIDTH ?>" value="0">
                <input class="form-check-input" type="checkbox" value="<?= true ?>" id="inGridSetting"
                       name="<?= SettingsConfig::FULL_WIDTH ?>"
                    <?= Settings::getBoolean(SettingsConfig::FULL_WIDTH) ? "checked" : "" ?>>
                <label class="form-check-label" for="inGridSetting">
                    Volle Breite / In Grid
                </label>
            </div>
            <br>
            <div class="form-check">
                <input type="hidden" name="<?= SettingsConfig::SHOW_SLIDER ?>" value="0">
                <input class="form-check-input" type="checkbox" value="<?= true ?>" id="enableSlider"
                       name="<?= SettingsConfig::SHOW_SLIDER ?>"
                    <?= Settings::getBoolean(SettingsConfig::SHOW_SLIDER) ? "checked" : "" ?>>
                <label class="form-check-label" for="enableSlider">
                    Slider aktivieren
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
                <input class="form-control" type="color" name="<?= SettingsConfig::PRIMARY_COLOR ?>"
                       value="<?= Settings::get(SettingsConfig::PRIMARY_COLOR) ?>">
                <label for="exampleInputEmail1">Primärfarbe</label>
                <?php SettingsResetButton(SettingsConfig::PRIMARY_COLOR) ?>
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <input class="form-control" type="color" name="<?= SettingsConfig::SECONDARY_COLOR ?>"
                       value="<?= Settings::get(SettingsConfig::SECONDARY_COLOR) ?>">
                <label for="exampleInputEmail1">Sekundärfarbe</label>
                <?php SettingsResetButton(SettingsConfig::SECONDARY_COLOR) ?>
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <input class="form-control" type="color" name="<?= SettingsConfig::LIGHT_BACKGROUND ?>"
                       value="<?= Settings::get(SettingsConfig::LIGHT_BACKGROUND) ?>">
                <label for="exampleInputEmail1">Heller Hintergrund</label>
                <?php SettingsResetButton(SettingsConfig::LIGHT_BACKGROUND) ?>
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <input class="form-control" type="color" name="<?= SettingsConfig::DARK_BACKGROUND ?>"
                       value="<?= Settings::get(SettingsConfig::DARK_BACKGROUND) ?>">
                <label for="exampleInputEmail1">Dunkler Hintergrund</label>
                <?php SettingsResetButton(SettingsConfig::DARK_BACKGROUND) ?>
            </div>
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
                    <input id="menu-logo" type="hidden" name="<?= SettingsConfig::MENU_LOGO ?>"
                           value="<?= Settings::get(SettingsConfig::MENU_LOGO) ?>">
                    <button id="menu-logo-button" type="button" class="btn btn-block btn-secondary"
                            data-toggle="modal"
                            data-target="#media-selection-modal"
                            onclick="setCurrentInputID('menu-logo')">
                        <?=isset($menuLogo) ? $menuLogo->filename." ausgewählt" : "Bild wählen"?>
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
                    <input id="footer-logo" type="hidden" name="<?= SettingsConfig::FOOTER_LOGO ?>"
                           value="<?= Settings::get(SettingsConfig::FOOTER_LOGO) ?>">
                    <button id="footer-logo-button" type="button" class="btn btn-block btn-secondary"
                            data-toggle="modal"
                            data-target="#media-selection-modal"
                            onclick="setCurrentInputID('footer-logo')">
                        <?=isset($footerLogo) ? $footerLogo->filename." ausgewählt" : "Bild wählen"?>
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
                    <input id="favicon" type="hidden" name="<?= SettingsConfig::FAVICON ?>"
                           value="<?= Settings::get(SettingsConfig::FAVICON) ?>">
                    <button id="favicon-button" type="button" class="btn btn-block btn-secondary"
                            data-toggle="modal"
                            data-target="#media-selection-modal"
                            onclick="setCurrentInputID('favicon')">
                        <?=isset($favicon) ? $favicon->filename." ausgewählt" : "Bild wählen"?>
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
