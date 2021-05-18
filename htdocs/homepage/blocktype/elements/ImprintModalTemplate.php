<div class="modal fade" id="impress-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Impressum von <?= Settings::get(SettingsConfig::PAGE_TITLE) ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <p>Informationspflicht laut §5 E-Commerce Gesetz, §14 Unternehmensgesetzbuch, §63 Gewerbeordnung und Offenlegungspflicht laut §25 Mediengesetz</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <h4><?= Settings::get(SettingsConfig::COMPANY_NAME) ?></h4>
                            <p><strong>Inhaber: </strong><?= Settings::get(SettingsConfig::COMPANY_OWNER) ?>
                            <br><strong>Unternehmensgegenstand: </strong><?= Settings::get(SettingsConfig::COMPANY_CORPORATE_OBJECT) ?>
                            <br><strong>Firmenbuchnummer: </strong><?= Settings::get(SettingsConfig::COMPANY_NUMBER) ?>
                            <br><strong>Handelsgericht: </strong><?= Settings::get(SettingsConfig::COMPANY_COMMERCIAL_COURT) ?>
                            <br><strong>Firmensitz: </strong><?= Settings::get(SettingsConfig::COMPANY_HEADQUARTERS) ?></p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <h4>Kontaktdaten</h4>
                            <p><?= Settings::get(SettingsConfig::COMPANY_ADDRESS) ?>
                            <br><?= Settings::get(SettingsConfig::COMPANY_LOCATION) ?>
                            <br><strong>Tel.: </strong><?= Settings::get(SettingsConfig::COMPANY_PHONE) ?>
                            <br><strong>E-Mail: </strong><?= Settings::get(SettingsConfig::COMPANY_MAIL) ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><strong>Mitglied: </strong>WKO
                            <br><strong>Berufsrecht: </strong>Gewerbeordnung <a href="https://www.ris.bka.gv.at">www.ris.bka.gv.at</a>
                            <br><strong>Aufsichtsbehörde/Gewerbebehörde: </strong>Bezirkshauptmannschaft <?= Settings::get(SettingsConfig::COMPANY_LOCATION) ?>
                            <br><strong>Berufsbezeichnung: </strong><?= Settings::get(SettingsConfig::COMPANY_CORPORATE_OBJECT) ?></p>
                        </div>   
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <p>Verbraucher haben die Möglichkeit, Beschwerden an die Online-Streitbeilegungsplattform der EU zu richten: <a href="https://www.ec.europa.eu/odr">ec.europa.eu/odr</a><br>
                            Sie können allfällige Beschwerden auch an die oben angegebenen E-Mail-Adresse richten.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
