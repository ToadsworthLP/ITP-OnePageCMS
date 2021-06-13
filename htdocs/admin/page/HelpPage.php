<?php
include_once "admin/block/NavbarBlock.php";
include_once "admin/block/AlertListBlock.php";
include_once "admin/block/GlobalSettingsBlock.php";

include "admin/utility/LoginRedirect.php";

Navbar();
?>

<div class="col content-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h1 class="display-4">Hilfe</h1>
                    <p class="lead">Hier finden Sie eine in Kategorien eingeteilte Hilfestellung zu den Features.</p>
                    <hr class="my-4">
                    <p>Eine Anleitung als PDF steht Ihnen unter folgendem Link zur Verfügung.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Herunterladen</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- Alerts -->
        <div class="row">
            <div class="col">
                <?php AlertListBlock(); ?>
            </div>
        </div>
        <!-- Content -->
        <!-- Nav tabs -->
        <div class="row">
            <div class="col-lg-4">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-dashboard-tab" data-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">Allgemein</a>
                <a class="nav-link" id="v-pills-menu-tab" data-toggle="pill" href="#v-pills-menu" role="tab" aria-controls="v-pills-menu" aria-selected="false">Menü</a>
                <a class="nav-link" id="v-pills-footer-tab" data-toggle="pill" href="#v-pills-footer" role="tab" aria-controls="v-pills-footer" aria-selected="false">Footer</a>
                <a class="nav-link" id="v-pills-slider-tab" data-toggle="pill" href="#v-pills-slider" role="tab" aria-controls="v-pills-slider" aria-selected="false">Slider</a>
                <a class="nav-link" id="v-pills-editor-tab" data-toggle="pill" href="#v-pills-editor" role="tab" aria-controls="v-pills-editor" aria-selected="false">Seiteneditor</a>
                <a class="nav-link" id="v-pills-user-tab" data-toggle="pill" href="#v-pills-user" role="tab" aria-controls="v-pills-user" aria-selected="false">Benutzerverwaltung</a>
                <a class="nav-link" id="v-pills-media-tab" data-toggle="pill" href="#v-pills-media" role="tab" aria-controls="v-pills-media" aria-selected="false">Medien-Bibliothek</a>
                <a class="nav-link" id="v-pills-contact-tab" data-toggle="pill" href="#v-pills-contact" role="tab" aria-controls="v-pills-contact" aria-selected="false">Kontaktformular</a>
                <a class="nav-link" id="v-pills-misc-tab" data-toggle="pill" href="#v-pills-misc" role="tab" aria-controls="v-pills-misc" aria-selected="false">Sonstiges</a>
                </div>
            </div>
            <div class="col-lg-8 help-content">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h5">Allgemeine Seiteneinstellungen</span>
                                </div>
                                <div class="card-body">
                                    <p>Die globalen Einstellungen beziehen sich auf die Informationen die als erstes beim Öffnen der Website sichtbar sind und auf das allgemeine Styling der Website.</p>
                                    <hr>
                                    <h5>Seiteninformationen</h5>
                                    <p>Im Seiteninformations-Bereich können Sie den Namen und eine Kurzbeschreibung Ihrer Website eingeben. Dies ist besonders für Suchmaschinen relevant. Achten Sie darauf, dass der Text nicht länger als 150 Zeichen wird da je nach Suchmaschine eine andere Zeichenanzahl angezeigt wird.</p>
                                    <p>Die Seite kann entweder den Bildschirm ausfüllen oder schmaler und zentraler ausgerichtet werden. Je nach dem welche Darstellungsart Sie bevorzugen, können Sie das <strong>Volle Breite / In Grid</strong> Kästchen anhaken.</p>
                                    <hr>
                                    <h5>Farben</h5>
                                    <p>In der Sektion für Farben können sie über ein Farbpanel eine Primär- und Sekundärfarbe wählen und zusätzlich bestimmen, ob der Hintergrund hell oder dunkel gehalten werden soll. Diese Attribute gelten für die gesamte Website können aber im Seiteneditor für jeden Block gesondert eingestellt werden.</p>
                                    <hr>
                                    <h5>Logo</h5>
                                    <p>In dem Abschnitt für Logos können sie Seitenweit Ihr Seitenlogo hinterlegen. Beim Favicon handelt es sich um ein Symbol im quadratischen Format welches sowohl als Appsymbol als auch in der Titelleiste Ihres Browsers angezeigt wird sobald Ihre Website geöffnet ist.</p>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-menu" role="tabpanel" aria-labelledby="v-pills-menu-tab">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h5">Menüeinstellungen</span>
                                </div>
                                <div class="card-body">
                                    <p>Das Menü entspricht der oben dargestellten Navigationsleiste, auf der das Logo und die Links auf die Sozialen Medien sichtbar sind. Tragen Sie in den Eingabefelder gewünschten Link in das zugehörige Feld mit dem gewünschten Social-Media-Portal.</p>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-footer" role="tabpanel" aria-labelledby="v-pills-footer-tab">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h5">Footer</span>
                                </div>
                                <div class="card-body">
                                    <p>Für den Footer kann unabhängig von den globalen Einstellungen die Hintergrundfarbe geändert werden und dementsprechend kann auch die Schrift farblich angepasst werden. Im Footer befinden sich Eingabefelder für alle firmenspezifischen Informationen, wie Name, Adresse, Kurzbeschreibung, Telefonnummer und E-Mail-Adresse.</p>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-slider" role="tabpanel" aria-labelledby="v-pills-slider-tab">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h5">Slider</span>
                                </div>
                                <div class="card-body">
                                    <p>Der Slider ist ganz oben auf der Seite sichtbar und enthält von Ihnen ausgesuchte Bilder, die nach einer gewissen Zeit wechseln.</p>
                                    <p>Die Indikatoren werden zentriert am unteren Bereich des Sliders angezeigt und geben die Anzahl der verfügbaren Sliders an und welcher gerade aktiv ist. Um ein Wechseln der Slides manuell durch Mausklick zu ermöglichen, gibt es die Option Navigationspfeile am linken und rechten Rand des Sliders einzublenden. Die Sliderzeit gibt an wie schnell zwischen den einzelnen Slides gewechselt wird und ist standardmäßig auf 5000 Millisekunden gesetzt. Diesen können Sie nach belieben anpassen.</p>
                                    <p>Mit dem <strong>+</strong> können Sie eine neue Slide hinzufügen und mit dem Pfeilkreuz verschieben um die Reihenfolge anzupassen. Um eine Slide zu löschen klicken Sie einfach auf das <strong>x</strong> des jeweiligen Slides.</p>
                                    <p>Wenn Sie mittig auf den Namen der Slide klicken, öffnet sich ein Bearbeitungsfenster, in dem sich diverse Eingabefelder und Einstellungen befinden. Eine Slide besteht mindestens aus einem Bild welches durch den „Sliderbild wählen“-Knopf aus der Medien-Bibliothek gewählt werden kann. Optional kann eine Slide eine Überschrift mit Text und ein Knopf mit dazugehörigem Link enthalten, diese werden zentral auf der Slide abgebildet.</p>
                                    <p>Denken Sie daran Ihre Einstellungen über <strong>Slider Speichern</strong> zu sichern.</p>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-editor" role="tabpanel" aria-labelledby="v-pills-editor-tab">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h5">Seiteneditor</span>
                                </div>
                                <div class="card-body">
                                    <p>Der Seiteditor verfügt über den Großteil der Bearbeitungstools für den Inhalt der Website.</p>
                                    <p>Ein neuer Seitenblock kann durch das <strong>+</strong> erstellt werden und mit dem Pfeilkreuz links an eine andere Position verschoben werden, wodurch sich die Reihenfolge der Seitenblöcke verändern lässt. Jeder Seitenblock kann durch klicken des <strong>x</strong> entfernt werden.</p>
                                    <p>Drückt man mittig auf den Namen der Sektion, öffnet sich das Bearbeitungsfenster mit einer Vielzahl an Einstellungen. Zunächst hat man ein Eingabefeld für den ID-Selektor, dieser ist dann auf der fertigen Website nicht sichtbar, wird aber intern für die Auseinanderhaltung der einzelnen Sektionen benötigt und kann benützt werden, um auf diese Sektion zu verlinken. Sie können die ID frei wählen, sollten aber darauf achten, dass sie sich von den IDs der anderen Sektionen unterscheidet. Falls Sie das Feld nicht ausfüllen, wird es automatisch vom System benannt.</p>
                                    <p>Jede Sektion kann unabhängig von den globalen Einstellungen den Bildschirm durch das Ankreuzen der <strong>Volle Breite / Im Raster</strong> Kästchens ausfüllen oder per Default schmaler und zentral ausgerichtet sein.</p>
                                    <p>Betätigen Sie das <strong>Im Menü anzeigen</strong> Kästchen, wird ein Link zu der dazugehörigen Sektion oben in der Menü Leiste erstellt.</p>
                                    <p>Sie haben die Wahl ein Hintergrundbild aus der Medien-Bibliothek auszusuchen oder einfache nur eine Hintergrundfarbe aus der Farbpalette zu wählen.</p>
                                    <p>Sektionen haben Eingabefelder für eine Überschrift, Unterüberschrift und einem Text. Zusätzlich kann ein Kästchen namens <strong>Trennlinie</strong> aktiviert werden, welches nur zum Styling dient und zwischen den Überschriften und Text sichtbar wird.</p>
                                    <p>Die Unterteilung des Inhalts kann aus sechs verschiedenen Optionen bestimmt werden. Diese Optionen werden in Form von Reitern mit der jeweiligen Vorschau des Stylings angezeigt. Je nachdem welche Option Sie wählen, haben Sie immer mindestens einmal folgende Eingabefelder auszufüllen.</p>
                                    <p>Sie haben Eingabefelder für eine Überschrift, Unterüberschrift, Text, Knopf-Link und Knopf-Text. Alle Eingabefelder sind optional. Zusätzlich gibt es die Optionen einer Trennlinie zwischen Überschriften und Text, und eines Hintergrundbilds aus der Medien-Bibliothek.</p>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h5">Benutzerverwaltung</span>
                                </div>
                                <div class="card-body">
                                    <p>Die Benutzerverwaltung enthält eine Liste aller Benutzer samt Benutzernamen, E-Mail-Adresse und Rollen. Der Administrator der Seite hat zusätzliche Funktionen bei der Verwaltung der Benutzer. Wenn Sie sich als Administrator nicht allein um die Betreuung Ihrer Website kümmern können Sie hier weitere Nutzer mit eingeschränkten Berechtigungen anlegen und verwalten.</p>
                                    <hr>
                                    <h5>Benutzer anlegen</h5>
                                    <p>Hier kann ein neuer Benützer mit Benutzername, E-Mail, Passwort und einer passenden Rolle, neu angelegt werden. Ein Benützer kann entweder die Admin oder die Staff (Mitarbeiter) Rolle zugewiesen bekommen. Nur die Admin Rolle kann neue Benutzer erstellen, Nutzer löschen und Passwörter zurücksetzen. Beide Rollen haben aber Zugang zur Benutzerliste.</p>
                                    <hr>
                                    <h5>Profil bearbeiten</h5>
                                    <p>Hier können Sie Ihre eigenen Profilinformationen ändern und das Passwort ändern.</p>
                                    <hr>
                                    <h5>Porfil löschen</h5>
                                    <p>Um einen Benutzer zu löschen wählen Sie entsprechende Funktion in der Zeile des Benutzers in der Schaltfläche aus.</p>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-media" role="tabpanel" aria-labelledby="v-pills-media-tab">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h5">Medien-Bibliothek</span>
                                </div>
                                <div class="card-body">
                                    <p>Die Medienverwaltung dient als Sammelort für alle Ihre Bilder, die Sie für Ihre Website benützen wollen.</p>
                                    <hr>
                                    <h5>Datei hochladen</h5>
                                    <p>Unter Datei hochladen können Sie aus Ihren Dateien ein Bild auswählen und hochladen. Achten Sie dabei dass es sich hierbei um gültige Bilddateien handelt die kleiner als 20Mb sind.</p>
                                    <hr>                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h5">Kontaktformular</span>
                                </div>
                                <div class="card-body">
                                    <p>Über das Kontaktformular sollten den Besuchern Ihrer Website ermöglicht werden Kontakt per E-Mail mit Ihnen/Ihrer Firma aufzunehmen. Das wird alles automatisch gehandhabt, dafür müssen Sie lediglich eine Kontakt-E-Mail, den Namen der Kontaktperson und zusätzlich können Sie auch einen Text wählen der am Anfang der E-Mail und/oder am Ende stehen kann wie zum Beispiel Kontaktdaten oder einen Hinweis dass es sich um eine automatische E-Mail handelt.</p>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-misc" role="tabpanel" aria-labelledby="v-pills-misc-tab">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h5">Sonstiges</span>
                                </div>
                                <div class="card-body">
                                    <h5>Impressum</h5>
                                    <p>Im Impressum müssen die Informationen der Person / Firma angegeben werden, die für den Inhalt der Website verantwortlich ist. Hier können Sie durch Eingabe von Inhaber, Firmenbuchnummer, Unternehmensgegenstand, Handelsgericht, Firmensitz und Adresse (bestehend aus Adresse, Ort, Telefonnummer und E-Mail) einfach und schnell ein Impressum erstellen.</p>
                                    <hr>
                                    <h5>Datenschutzerklärung</h5>
                                    <p>Hierbei können Sie eine personalisierte Datenschutzerklärung hinterlassen in der Sie die Besucher informieren ob und wie Sie mit personenbezogenen Daten umgehen. Weiters können Sie eine Telefonnummer eines Datenschutzbeauftragten hinterlassen sollten Sie verpflichtet sein einen anzuführen.</p>
                                    <p>Sollten Sie keine gesonderten Erklärungen eintragen wird ein in Österreich gültiger Standardtext angezeigt. Bitte überprüfen Sie ob er Ihren Kriterien entspricht.</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="admin/js/help-navigation.js" defer></script>
