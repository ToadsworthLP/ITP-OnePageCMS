<div class="col-12">
    <form method="post" action="admin.php?&action=<?= AdminActions::UPDATE_SETTINGS ?>">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Telefonnummer des Datenschutzbeauftragten <?php SettingsResetButton(SettingsConfig::DATA_PROTECTION_PHONE) ?></label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                    name="<?= SettingsConfig::DATA_PROTECTION_PHONE ?>"
                    value="<?= Settings::get(SettingsConfig::DATA_PROTECTION_PHONE) ?>">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Datenschutzerklärung <?php SettingsResetButton(SettingsConfig::DATA_PROTECTION_CUSTOM_TEXT) ?></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="<?= SettingsConfig::DATA_PROTECTION_CUSTOM_TEXT ?>"><?= Settings::get(SettingsConfig::DATA_PROTECTION_CUSTOM_TEXT) ?></textarea>
                </div>
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-block btn-primary">Einstellungen speichern</button>
        <br>
    </form>
</div>
