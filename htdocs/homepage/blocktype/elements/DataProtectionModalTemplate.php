<div class="modal fade" id="data-protection-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Datenschutzerklärung von <?= Settings::get(SettingsConfig::PAGE_TITLE) ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <p>Wir legen großen Wert auf den Schutz Ihrer Daten. Um Sie in vollem Umfang über die Verwendung personenbezogener Daten zu informieren, bitten wir Sie die folgenden Datenschutzhinweise zur Kenntnis zu nehmen.</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <h5>Persönliche Daten</h5>
                            <!-- Das ist ein Standardtext wenn keine Daten gesammelt werden. Sollte der Nutzer im Formular etwas anderes eintragen soll dieser Text ersetzt werden -->
                            <p>Persönliche Daten, die Sie auf dieser Website elektronisch übermitteln, wie zum Beispiel Name, E-Mail-Adresse, Adresse oder andere persönlichen Angaben, werden von uns nur zum jeweils angegebenen Zweck verwendet, sicher verwahrt und nicht an Dritte weitergegeben. Der Provider erhebt und speichert automatisch Informationen am Webserver wie verwendeter Browser, Betriebssystem, Verweisseite, IP-Adresse, Uhrzeit des Zugriffs usw. Diese Daten können ohne Prüfung weiterer Datenquellen keinen bestimmten Personen zugeordnet werden und wir werten diese Daten auch nicht weiter aus solange keine rechtswidrige Nutzung unserer Webseite vorliegt.</p>
                        </div>
                    </div>
                    <br>
                    <!-- Diese Row soll nur angezeigt werden wenn eine Nummer eingetragen ist, denn nur größere Firmen brauchen einen externen Datenschutzbeauftragten -->
                    <div class="row">
                        <div class="col">
                            <h5>Datenschutzbeauftragter</h5>
                            <p>Unseren Datenschutzsbeauftragten erreichen Sie unter: {Telefonnummer}</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <h5>Rechtsbehelfsbelehrung</h5>
                            <p>Ihnen stehen grundsätzlich die Rechte auf Auskunft, Berichtigung, Löschung, Einschränkung, Datenübertragbarkeit und Widerspruch zu. Dafür wenden Sie sich an uns. Wenn Sie glauben, dass die Verarbeitung Ihrer Daten gegen das Datenschutzrecht verstößt oder Ihre datenschutzrechtlichen Ansprüche sonst in einer Weise verletzt worden sind, können Sie sich bei der Aufsichtsbehörde beschweren. In Österreich ist die Datenschutzbehörde zuständig.</p>
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
                </div>
            </div>
        </div>
    </div>
</div>
