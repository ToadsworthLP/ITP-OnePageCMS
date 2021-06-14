<form method="post" action="admin.php?&action=<?= AdminActions::UPDATE_SETTINGS ?>">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-check">
                <input type="hidden" name="<?= SettingsConfig::SHOW_CONTACT_FORM ?>" value="0">
                <input class="form-check-input" type="checkbox" value="<?= true ?>" id="showFormSetting"
                       name="<?= SettingsConfig::SHOW_CONTACT_FORM ?>"
                    <?= Settings::getBoolean(SettingsConfig::SHOW_CONTACT_FORM) ? "checked" : "" ?>>
                <label id="input_6_1" class="form-check-label" for="showFormSetting">Kontaktformular anzeigen</label>
            </div>
            <br>
        </div>
    </div>
    <div class="row">
         <div class="col-lg-6">
            <div class="form-group">
                <label id="input_6_2" for="exampleInputEmail1">Kontaktadresse <?php SettingsResetButton(SettingsConfig::CONTACT_ADDRESS) ?></label>
                <input type="email" class="form-control"
                name="<?= SettingsConfig::CONTACT_ADDRESS ?>"
                value="<?= Settings::get(SettingsConfig::CONTACT_ADDRESS) ?>">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="form-group">
                <label id="input_6_3" for="exampleInputEmail1">Name der Kontaktperson <?php SettingsResetButton(SettingsConfig::CONTACT_NAME) ?></label>
                <input type="text" class="form-control"
                name="<?= SettingsConfig::CONTACT_NAME ?>"
                value="<?= Settings::get(SettingsConfig::CONTACT_NAME) ?>">
            </div>
         </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label id="input_6_4" for="exampleFormControlTextarea1">E-Mail-Header <?php SettingsResetButton(SettingsConfig::CONTACT_EMAIL_HEADER) ?></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                name="<?= SettingsConfig::CONTACT_EMAIL_HEADER ?>"><?= Settings::get(SettingsConfig::CONTACT_EMAIL_HEADER) ?></textarea>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label id="input_6_5" for="exampleFormControlTextarea1">E-Mail-Footer <?php SettingsResetButton(SettingsConfig::CONTACT_EMAIL_FOOTER) ?></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                name="<?= SettingsConfig::CONTACT_EMAIL_FOOTER ?>"><?= Settings::get(SettingsConfig::CONTACT_EMAIL_FOOTER) ?></textarea>
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
