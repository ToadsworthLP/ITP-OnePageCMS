<div class="col-12">
    <form method="post" action="admin.php?&action=<?= AdminActions::UPDATE_SETTINGS ?>">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Telefonnummer des Datenschutzbeauftragten <?php SettingsResetButton(SettingsConfig::COMPANY_OWNER) ?></label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                    name="<?= SettingsConfig::COMPANY_OWNER ?>"
                    value="<?= Settings::get(SettingsConfig::COMPANY_OWNER) ?>">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Datenschutzerklärung <?php SettingsResetButton(SettingsConfig::COMPANY_NUMBER) ?></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-block btn-primary">Einstellungen speichern</button>
        <br>
    </form>
</div>
