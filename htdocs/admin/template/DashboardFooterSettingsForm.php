<form method="post" action="admin.php?&action=<?= AdminActions::UPDATE_SETTINGS ?>">
    <div class="row">
        <div class="col-lg">
            <div class="form-group">
                <label for="exampleInputEmail1">Heller Hintergrund <?php SettingsResetButton(SettingsConfig::FOOTER_LIGHT_BACKGROUND) ?></label>
                <input class="form-control" type="color"
                       name="<?= SettingsConfig::FOOTER_LIGHT_BACKGROUND ?>"
                       value="<?= Settings::get(SettingsConfig::FOOTER_LIGHT_BACKGROUND) ?>">
            </div>
        </div>
        <div class="col-lg">
            <div class="form-group">
                <label for="exampleInputEmail1">Dunkler Hintergrund <?php SettingsResetButton(SettingsConfig::FOOTER_DARK_BACKGROUND) ?></label>
                <input class="form-control" type="color"
                       name="<?= SettingsConfig::FOOTER_DARK_BACKGROUND ?>"
                       value="<?= Settings::get(SettingsConfig::FOOTER_DARK_BACKGROUND) ?>">
            </div>
        </div>
        <div class="col-lg">
            <div class="form-group">
                <label for="exampleInputEmail1">Schriftfarbe wählen <?php SettingsResetButton(SettingsConfig::FOOTER_FONT_COLOR) ?></label>
                <input class="form-control" type="color"
                       name="<?= SettingsConfig::FOOTER_FONT_COLOR ?>"
                       value="<?= Settings::get(SettingsConfig::FOOTER_FONT_COLOR) ?>">
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label for="exampleFormControlFile1">Firmenbezeichnung <?php SettingsResetButton(SettingsConfig::COMPANY_NAME) ?></label>
                <input class="form-control" type="text" placeholder="Default input"
                       name="<?= SettingsConfig::COMPANY_NAME ?>"
                       value="<?= Settings::get(SettingsConfig::COMPANY_NAME) ?>">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label for="exampleFormControlFile1">Adresse <?php SettingsResetButton(SettingsConfig::COMPANY_ADDRESS) ?></label>
                <input class="form-control" type="text" placeholder="Default input"
                       name="<?= SettingsConfig::COMPANY_ADDRESS ?>"
                       value="<?= Settings::get(SettingsConfig::COMPANY_ADDRESS) ?>">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label for="exampleFormControlTextarea2">Kurzbeschreibung <?php SettingsResetButton(SettingsConfig::FOOTER_DESCRIPTION) ?></label>
                <textarea class="form-control" id="exampleFormControlTextarea2" rows="1"
                          name="<?= SettingsConfig::FOOTER_DESCRIPTION ?>"><?= Settings::get(SettingsConfig::FOOTER_DESCRIPTION) ?></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label for="exampleFormControlFile1">Ort <?php SettingsResetButton(SettingsConfig::COMPANY_LOCATION) ?></label>
                <input class="form-control" type="text" placeholder="Default input"
                       name="<?= SettingsConfig::COMPANY_LOCATION ?>"
                       value="<?= Settings::get(SettingsConfig::COMPANY_LOCATION) ?>">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label for="exampleFormControlFile1">Telefon-Nummer <?php SettingsResetButton(SettingsConfig::COMPANY_PHONE) ?></label>
                <input class="form-control" type="text" placeholder="Default input"
                       name="<?= SettingsConfig::COMPANY_PHONE ?>"
                       value="<?= Settings::get(SettingsConfig::COMPANY_PHONE) ?>">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label for="exampleFormControlFile1">E-Mail-Adresse <?php SettingsResetButton(SettingsConfig::COMPANY_MAIL) ?></label>
                <input class="form-control" type="text" placeholder="Default input"
                       name="<?= SettingsConfig::COMPANY_MAIL ?>"
                       value="<?= Settings::get(SettingsConfig::COMPANY_MAIL) ?>">
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
