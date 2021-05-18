<div class="col-12">
    <form method="post" action="admin.php?&action=<?= AdminActions::UPDATE_SETTINGS ?>">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Inhaber</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                    name="<?= SettingsConfig::COMPANY_OWNER ?>"
                    value="<?= Settings::get(SettingsConfig::COMPANY_OWNER) ?>">
                    <?php SettingsResetButton(SettingsConfig::COMPANY_OWNER) ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Firmenbuchnummer</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                    name="<?= SettingsConfig::COMPANY_NUMBER ?>"
                    value="<?= Settings::get(SettingsConfig::COMPANY_NUMBER) ?>">
                    <?php SettingsResetButton(SettingsConfig::COMPANY_NUMBER) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Unternehmensgegenstand</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                    name="<?= SettingsConfig::COMPANY_CORPORATE_OBJECT ?>"
                    value="<?= Settings::get(SettingsConfig::COMPANY_CORPORATE_OBJECT) ?>">
                    <?php SettingsResetButton(SettingsConfig::COMPANY_CORPORATE_OBJECT) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Handelsgericht</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                    name="<?= SettingsConfig::COMPANY_COMMERCIAL_COURT ?>"
                    value="<?= Settings::get(SettingsConfig::COMPANY_COMMERCIAL_COURT) ?>">
                    <?php SettingsResetButton(SettingsConfig::COMPANY_COMMERCIAL_COURT) ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Firmensitz</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                    name="<?= SettingsConfig::COMPANY_HEADQUARTERS ?>"
                    value="<?= Settings::get(SettingsConfig::COMPANY_HEADQUARTERS) ?>">
                    <?php SettingsResetButton(SettingsConfig::COMPANY_HEADQUARTERS) ?>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Adresse</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                    name="<?= SettingsConfig::COMPANY_LOCATION ?>"
                    value="<?= Settings::get(SettingsConfig::COMPANY_LOCATION) ?>">
                    <?php SettingsResetButton(SettingsConfig::COMPANY_LOCATION) ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Ort</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                    name="<?= SettingsConfig::COMPANY_ADDRESS ?>"
                    value="<?= Settings::get(SettingsConfig::COMPANY_ADDRESS) ?>">
                    <?php SettingsResetButton(SettingsConfig::COMPANY_ADDRESS) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Telefonnummer</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                    name="<?= SettingsConfig::COMPANY_PHONE ?>"
                    value="<?= Settings::get(SettingsConfig::COMPANY_PHONE) ?>">
                    <?php SettingsResetButton(SettingsConfig::COMPANY_PHONE) ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"
                    name="<?= SettingsConfig::COMPANY_MAIL ?>"
                    value="<?= Settings::get(SettingsConfig::COMPANY_MAIL) ?>">
                    <?php SettingsResetButton(SettingsConfig::COMPANY_MAIL) ?>
                </div>
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-block btn-primary">Einstellungen speichern</button>
        <br>
    </form>
</div>
