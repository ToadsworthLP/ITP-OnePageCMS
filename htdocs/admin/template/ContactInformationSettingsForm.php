<form method="post" action="admin.php?&action=<?= AdminActions::UPDATE_SETTINGS ?>">
    <div class="row">
         <div class="col-lg-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Kontaktadresse</label>
                <input type="email" class="form-control"
                name="<?= SettingsConfig::CONTACT_ADDRESS ?>"
                value="<?= Settings::get(SettingsConfig::CONTACT_ADDRESS) ?>">
                <?php SettingsResetButton(SettingsConfig::CONTACT_ADDRESS) ?>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Name der Kontaktperson</label>
                <input type="text" class="form-control"
                name="<?= SettingsConfig::CONTACT_NAME ?>"
                value="<?= Settings::get(SettingsConfig::CONTACT_NAME) ?>">
                <?php SettingsResetButton(SettingsConfig::CONTACT_NAME) ?>
            </div>
         </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">E-Mail-Header</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                name="<?= SettingsConfig::CONTACT_EMAIL_HEADER ?>"><?= Settings::get(SettingsConfig::CONTACT_EMAIL_HEADER) ?></textarea>
                <?php SettingsResetButton(SettingsConfig::CONTACT_EMAIL_HEADER) ?>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">E-Mail-Footer</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                name="<?= SettingsConfig::CONTACT_EMAIL_FOOTER ?>"><?= Settings::get(SettingsConfig::CONTACT_EMAIL_FOOTER) ?></textarea>
                <?php SettingsResetButton(SettingsConfig::CONTACT_EMAIL_FOOTER) ?>
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
