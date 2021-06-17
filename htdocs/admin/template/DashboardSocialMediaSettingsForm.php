<form method="post" action="admin.php?&action=<?= AdminActions::UPDATE_SETTINGS ?>">
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label id="input_1_1" for="exampleFormControlSelect1">Facebook <?php SettingsResetButton(SettingsConfig::FACEBOOK_LINK) ?></label>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <label for="socialMediaInput1" hidden>Link </label>
                <input type="text" class="form-control" id="socialMediaInput1" placeholder="Profil-Adresse"
                       name="<?= SettingsConfig::FACEBOOK_LINK ?>"
                       value="<?= Settings::get(SettingsConfig::FACEBOOK_LINK) ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label id="input_1_2" for="exampleFormControlSelect1">Instagram <?php SettingsResetButton(SettingsConfig::INSTAGRAM_LINK) ?></label>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <label for="socialMediaInput2" hidden>Link</label>
                <input type="text" class="form-control" id="socialMediaInput2" placeholder="Profil-Adresse"
                       name="<?= SettingsConfig::INSTAGRAM_LINK ?>"
                       value="<?= Settings::get(SettingsConfig::INSTAGRAM_LINK) ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label id="input_1_3" for="exampleFormControlSelect1">Twitter <?php SettingsResetButton(SettingsConfig::TWITTER_LINK) ?></label>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <label for="socialMediaInput3" hidden>Link</label>
                <input type="text" class="form-control" id="socialMediaInput3" placeholder="Profil-Adresse"
                       name="<?= SettingsConfig::TWITTER_LINK ?>"
                       value="<?= Settings::get(SettingsConfig::TWITTER_LINK) ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label id="input_1_4" for="exampleFormControlSelect1">LinkedIn <?php SettingsResetButton(SettingsConfig::LINKEDIN_LINK) ?></label>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <label for="socialMediaInput4" hidden>Link</label>
                <input type="text" class="form-control" id="socialMediaInput4" placeholder="Profil-Adresse"
                       name="<?= SettingsConfig::LINKEDIN_LINK ?>"
                       value="<?= Settings::get(SettingsConfig::LINKEDIN_LINK) ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label id="input_1_5" for="exampleFormControlSelect1">YouTube <?php SettingsResetButton(SettingsConfig::YOUTUBE_LINK) ?></label>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <label for="socialMediaInput5" hidden>Link</label>
                <input type="text" class="form-control" id="socialMediaInput5" placeholder="Profil-Adresse"
                       name="<?= SettingsConfig::YOUTUBE_LINK ?>"
                       value="<?= Settings::get(SettingsConfig::YOUTUBE_LINK) ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label id="input_1_6" for="exampleFormControlSelect1">Custom <?php SettingsResetButton(SettingsConfig::ANY_LINK) ?></label>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="form-group">
                <label for="socialMediaInput6" hidden>Link</label>
                <input type="text" class="form-control" id="socialMediaInput6" placeholder="Profil-Adresse"
                       name="<?= SettingsConfig::ANY_LINK ?>"
                       value="<?= Settings::get(SettingsConfig::ANY_LINK) ?>">
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
