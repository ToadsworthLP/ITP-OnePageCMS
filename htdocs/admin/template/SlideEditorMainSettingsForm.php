<div class="col-12">
    <form method="post" action="admin.php?&action=<?= AdminActions::UPDATE_SETTINGS ?>">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-check">
                    <input type="hidden" name="<?= SettingsConfig::SLIDER_SHOW_INDICATORS ?>" value="0">
                    <input class="form-check-input" type="checkbox" value="<?= true ?>" id="sliderShowIndicators"
                           name="<?= SettingsConfig::SLIDER_SHOW_INDICATORS ?>"
                        <?= Settings::getBoolean(SettingsConfig::SLIDER_SHOW_INDICATORS) ? "checked" : "" ?>>
                    <label class="form-check-label" for="sliderShowIndicators">
                        Indikatoren einblenden
                    </label>
                </div>
                <br>
            </div>
            <div class="col-sm-4">
                <div class="form-check">
                    <input type="hidden" name="<?= SettingsConfig::SLIDER_SHOW_NAVIGATION ?>" value="0">
                    <input class="form-check-input" type="checkbox" value="<?= true ?>" id="sliderShowNavigation"
                           name="<?= SettingsConfig::SLIDER_SHOW_NAVIGATION ?>"
                        <?= Settings::getBoolean(SettingsConfig::SLIDER_SHOW_NAVIGATION) ? "checked" : "" ?>>
                    <label class="form-check-label" for="sliderShowNavigation">
                        Navigationspfeile einblenden
                    </label>
                </div>
                <br>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <input type="number" class="form-control" id=""
                           name="<?= SettingsConfig::SLIDER_DELAY ?>"
                           value="<?= Settings::get(SettingsConfig::SLIDER_DELAY) ?>">
                    <label for="">Sliderzeit</label>
                    <?php SettingsResetButton(SettingsConfig::SLIDER_DELAY) ?>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-block btn-primary">Einstellungen speichern</button>
        <br>
    </form>
</div>
