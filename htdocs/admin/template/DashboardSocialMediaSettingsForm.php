<form method="post" action="admin.php?&action=<?= AdminActions::UPDATE_SETTINGS ?>">
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Facebook</label>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <label for="exampleFormControlInput1" hidden>Link</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Profil-Adresse"
                       name="<?= SettingsConfig::FACEBOOK_LINK ?>"
                       value="<?= Settings::get(SettingsConfig::FACEBOOK_LINK) ?>">
                <?php SettingsResetButton(SettingsConfig::FACEBOOK_LINK) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Instagram</label>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <label for="exampleFormControlInput1" hidden>Link</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Profil-Adresse"
                       name="<?= SettingsConfig::INSTAGRAM_LINK ?>"
                       value="<?= Settings::get(SettingsConfig::INSTAGRAM_LINK) ?>">
                <?php SettingsResetButton(SettingsConfig::INSTAGRAM_LINK) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Twitter</label>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <label for="exampleFormControlInput1" hidden>Link</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Profil-Adresse"
                       name="<?= SettingsConfig::TWITTER_LINK ?>"
                       value="<?= Settings::get(SettingsConfig::TWITTER_LINK) ?>">
                <?php SettingsResetButton(SettingsConfig::TWITTER_LINK) ?>
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
