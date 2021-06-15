"use strict"

let dashboard_map = new Map();
let menu_map = new Map();
let footer_map = new Map();
let slider_map = new Map();
let user_map = new Map();
let media_map = new Map();
let contact_map = new Map();
let misc_map = new Map();


// Global Settings
dashboard_map.set("input_0_1", "Tragen Sie hier Ihren Seitentitel ein.");
dashboard_map.set("input_0_2", "Hier können Sie angeben ob sich Ihre Seiteninhalt über die volle Bildschirmbreite erstrecken sollen.");
dashboard_map.set("input_0_3", "Die Seitebeschreibung scheint vorwiegend bei der Kurzbschreibung in Suchmaschinen auf.");
dashboard_map.set("input_0_4", "Wählen Sie die seitenweite Hauptfarbe.");
dashboard_map.set("input_0_5", "Wählen Sie die seitenweite Sekundärfarbe. Diese dient vorallem bei Buttons als Hoverfarbe.");
dashboard_map.set("input_0_6", "Wählen Sie hier wie die ungeraden Sektionen dargestellt werden sollen.");
dashboard_map.set("input_0_7", "Wählen Sie hier wie die geraden Sektionen dargestellt werden sollen.");
dashboard_map.set("input_0_8", "Wählen Sie hier Ihre Logografik aus der Medienauswahl. Dieses scheint links in der Navigationsleiste Ihrer Seite auf.");
dashboard_map.set("input_0_9", "Wählen Sie hier Ihre Footergrafik aus der Medienauswahl. Dieses scheint links in der linken Spalte Ihres Seitenfooters auf.");
dashboard_map.set("input_0_10", "Wählen Sie hier Ihr Favicon aus der Medienauswahl. Dieses ist in der Titelleiste Ihres Browsers zu sehen.");

// Menu
menu_map.set("input_1_1", "Hier geben Sie den Link zu Ihrer Facebookseite an.");
menu_map.set("input_1_2", "Hier geben Sie den Link zu Ihres Instragramprofils an.");
menu_map.set("input_1_3", "Hier geben Sie den Link zu Ihrer Twitterseite an.");
menu_map.set("input_1_4", "Hier geben Sie den Link zu Ihres LinkedIn-Profils an.");
menu_map.set("input_1_5", "Hier geben Sie den Link zu Ihres YouTube-Kanals an.");
menu_map.set("input_1_6", "Hier geben Sie den Link zu einer beliebigen Adresse an.");

// Footer
footer_map.set("input_2_1", "Hier wählen Sie die Hintergrundfarbe Ihres Seitenfooters am unteren Rand.");
footer_map.set("input_2_2", "Hier wählen Sie die Hintergrundfarbe der Copyright-Leiste am unteren Rand.");
footer_map.set("input_2_3", "Hier können Sie für Ihren Footertext die gewünschte Textfarbe auswählen.");
footer_map.set("input_2_4", "Geben Sie hier Ihren Firmenwortlaut an.");
footer_map.set("input_2_5", "Geben Sie hier Ihre Adresse an unter der Sie erreichbar sein wollen.");
footer_map.set("input_2_6", "Tragen Sie hier eine Kurzbeschreibung Ihrer Leistungen ein.");
footer_map.set("input_2_7", "Geben Sie hier Ihren Standort an unter der Sie erreichbar sein wollen.");
footer_map.set("input_2_8", "Geben Sie hier Ihre Telefonnummer an unter der Sie erreichbar sein wollen.");
footer_map.set("input_2_9", "Geben Sie hier Ihre E-Mail-Adresse an unter der Sie erreichbar sein wollen.");

// Slider
slider_map.set("input_3_1", "Hier können Sie die Anzeige des Sliders ein- und ausschalten.");
slider_map.set("input_3_2", "Hier können Sie die Indikatoren des Sliders ein- und ausblenden.");
slider_map.set("input_3_3", "Hier können Sie die Navigationspfeile des Sliders ein- und ausblenden.");
slider_map.set("input_3_4", "Hier können Sie die Übergangszeit des Sliders in Millisekunden einstellen.");

// User
user_map.set("input_4_1", "Geben Sie Ihren Benutzernamen ein.");
user_map.set("input_4_2", "Tragen Sie hier Ihre Emailadresse ein.");
user_map.set("input_4_3", "Wählen Sie ein Passwort.");
user_map.set("input_4_4", "Wählen Sie die Rolle für den Benutzer aus.");
user_map.set("input_4_5", "Hier können Sie Ihren Benutzernamen ändern.");
user_map.set("input_4_6", "Hier können Sie Ihre Emailadresse ändern.");
user_map.set("input_4_7", "Geben Sie Ihr neues Passwort an.");
user_map.set("input_4_8", "Bestätigen Sie Ihr neues Passwort.");
user_map.set("input_4_9", "Hier können Sie Ihre Rolle ändern.");

// Media
media_map.set("input_5_1", "Laden Sie hier ein Bild Ihrer wahl hoch. Beachten Sie dass die maximale Größe 20MB beträgt.");

// Contactform
contact_map.set("input_6_1", "Wählen Sie aus ob das Kontaktformular angezeigt werden soll.");
contact_map.set("input_6_2", "Tragen Sie hier Ihre Kontaktadresse ein.");
contact_map.set("input_6_3", "Geben Sie bitte Ihren Namen an.");
contact_map.set("input_6_4", "Hier können Sie eintragen was am Beginn der automatischen Nachrichten des Kontaktformulars stehen soll.");
contact_map.set("input_6_5", "Hier können Sie eintragen was am Ende der automatischen Nachrichten des Kontaktformulars stehen soll.");

// Misc
misc_map.set("input_7_1", "Tragen Sie hier den Inhaber der Webseite ein.");
misc_map.set("input_7_2", "Tragen Sie hier Ihre Firmenbuchnummer ein.");
misc_map.set("input_7_3", "Tragen Sie hier Ihren Unternehmensgegenstand ein.");
misc_map.set("input_7_4", "Tragen Sie hier Ihr Handelsgericht ein.");
misc_map.set("input_7_5", "Tragen Sie hier Ihren Firmensitz ein.");
misc_map.set("input_7_6", "Tragen Sie hier Ihre Adresse ein.");
misc_map.set("input_7_7", "Tragen Sie hier Ihren Standort ein.");
misc_map.set("input_7_8", "Tragen Sie hier Ihre Telefonnummer ein.");
misc_map.set("input_7_9", "Tragen Sie hier Ihre E-mail Adresse ein.");
misc_map.set("input_7_10", "Tragen Sie hier die Telefonnummer des Datenschutzbeauftragten ein.");
misc_map.set("input_7_11", "Hier können Sie Ihre Datenschutzerklärung eintragen.");

// Array of Sitemaps
let site_array = [
    dashboard_map,
    menu_map,
    footer_map,
    slider_map,
    user_map,
    media_map,
    contact_map,
    misc_map
];

// Inserts Text to the Labels if it exists
for(let i = 0; i < site_array.length; i++){
    for(let j = 1; j <= site_array[i].size; j++){
        let tempElement = document.getElementById(`input_${i}_${j}`);
        if(tempElement != null){
            let text = site_array[i].get(`input_${i}_${j}`);
            document.getElementById(`input_${i}_${j}`).setAttribute("title", text);
        }
    }
}
