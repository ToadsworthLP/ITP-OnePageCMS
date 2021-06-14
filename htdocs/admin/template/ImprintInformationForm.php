<div class="col-12">
    <form method="post" action="admin.php?&action=<?= AdminActions::UPDATE_SETTINGS ?>">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label id="input_7_1" for="exampleInputEmail1">Inhaber <?php SettingsResetButton(SettingsConfig::COMPANY_OWNER) ?></label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                    name="<?= SettingsConfig::COMPANY_OWNER ?>"
                    value="<?= Settings::get(SettingsConfig::COMPANY_OWNER) ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label id="input_7_2" for="exampleInputEmail1">Firmenbuchnummer <?php SettingsResetButton(SettingsConfig::COMPANY_NUMBER) ?></label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                    name="<?= SettingsConfig::COMPANY_NUMBER ?>"
                    value="<?= Settings::get(SettingsConfig::COMPANY_NUMBER) ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label id="input_7_3" for="exampleInputEmail1">Unternehmensgegenstand <?php SettingsResetButton(SettingsConfig::COMPANY_CORPORATE_OBJECT) ?></label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                    name="<?= SettingsConfig::COMPANY_CORPORATE_OBJECT ?>"
                    value="<?= Settings::get(SettingsConfig::COMPANY_CORPORATE_OBJECT) ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label id="input_7_4" for="exampleInputEmail1">Handelsgericht <?php SettingsResetButton(SettingsConfig::COMPANY_COMMERCIAL_COURT) ?></label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                    name="<?= SettingsConfig::COMPANY_COMMERCIAL_COURT ?>"
                    value="<?= Settings::get(SettingsConfig::COMPANY_COMMERCIAL_COURT) ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label id="input_7_5" for="exampleInputEmail1">Firmensitz <?php SettingsResetButton(SettingsConfig::COMPANY_HEADQUARTERS) ?></label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                    name="<?= SettingsConfig::COMPANY_HEADQUARTERS ?>"
                    value="<?= Settings::get(SettingsConfig::COMPANY_HEADQUARTERS) ?>">
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label id="input_7_6" for="exampleInputEmail1">Adresse <?php SettingsResetButton(SettingsConfig::COMPANY_LOCATION) ?></label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                    name="<?= SettingsConfig::COMPANY_LOCATION ?>"
                    value="<?= Settings::get(SettingsConfig::COMPANY_LOCATION) ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label id="input_7_7" for="exampleInputEmail1">Ort <?php SettingsResetButton(SettingsConfig::COMPANY_ADDRESS) ?></label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                    name="<?= SettingsConfig::COMPANY_ADDRESS ?>"
                    value="<?= Settings::get(SettingsConfig::COMPANY_ADDRESS) ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label id="input_7_8" for="exampleInputEmail1">Telefonnummer <?php SettingsResetButton(SettingsConfig::COMPANY_PHONE) ?></label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                    name="<?= SettingsConfig::COMPANY_PHONE ?>"
                    value="<?= Settings::get(SettingsConfig::COMPANY_PHONE) ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label id="input_7_19" for="exampleInputEmail1">Email <?php SettingsResetButton(SettingsConfig::COMPANY_MAIL) ?></label>
                    <input type="email" class="form-control" id="exampleInputEmail1"
                    name="<?= SettingsConfig::COMPANY_MAIL ?>"
                    value="<?= Settings::get(SettingsConfig::COMPANY_MAIL) ?>">
                </div>
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-block btn-primary">Einstellungen speichern</button>
        <br>
    </form>
</div>
