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
dashboard_map.set("input_0_1", "Text: input_0_1");
dashboard_map.set("input_0_2", "Text: input_0_2");
dashboard_map.set("input_0_3", "Text: input_0_3");
dashboard_map.set("input_0_4", "Text: input_0_4");
dashboard_map.set("input_0_5", "Text: input_0_5");
dashboard_map.set("input_0_6", "Text: input_0_6");
dashboard_map.set("input_0_7", "Text: input_0_7");
dashboard_map.set("input_0_8", "Text: input_0_8");
dashboard_map.set("input_0_9", "Text: input_0_9");
dashboard_map.set("input_0_10", "Text: input_0_10");

// Menu
menu_map.set("input_1_1", "Text: input_1_1");
menu_map.set("input_1_2", "Text: input_1_2");
menu_map.set("input_1_3", "Text: input_1_3");
menu_map.set("input_1_4", "Text: input_1_4");
menu_map.set("input_1_5", "Text: input_1_5");
menu_map.set("input_1_6", "Text: input_1_6");

// Footer
footer_map.set("input_2_1", "Text: input_2_1");
footer_map.set("input_2_2", "Text: input_2_2");
footer_map.set("input_2_3", "Text: input_2_3");
footer_map.set("input_2_4", "Text: input_2_4");
footer_map.set("input_2_5", "Text: input_2_5");
footer_map.set("input_2_6", "Text: input_2_6");
footer_map.set("input_2_7", "Text: input_2_7");
footer_map.set("input_2_8", "Text: input_2_8");
footer_map.set("input_2_9", "Text: input_2_9");

// Slider
slider_map.set("input_3_1", "Text: input_3_1");
slider_map.set("input_3_2", "Text: input_3_2");
slider_map.set("input_3_3", "Text: input_3_3");
slider_map.set("input_3_4", "Text: input_3_4");

// User
user_map.set("input_4_1", "Bitte geben Sie Ihren Benutzernamen ein");
user_map.set("input_4_2", "Bitte tragen Sie hier Ihre Emailadresse ein");
user_map.set("input_4_3", "Bitte wählen Sie ein Passwort");
user_map.set("input_4_4", "Wählen Sie die Rolle für den Benutzer aus");
user_map.set("input_4_5", "Hier können Sie Ihren Benutzernamen ändern");
user_map.set("input_4_6", "Hier können Sie Ihre Emailadresse ändern");
user_map.set("input_4_7", "Bitte geben Sie Ihr neues Passwort an");
user_map.set("input_4_8", "Bitte bestätigen Sie Ihr neues Passwort");
user_map.set("input_4_9", "Hier können Sie Ihre Rolle ändern");

// Media
media_map.set("input_5_1", "Laden Sie hier ein Bild Ihrer wahl hoch. Beachten Sie bitte das die maximale Größe 20MB beträgt");

// Contactform
contact_map.set("input_6_1", "Wählen Sie aus ob das Kontaktformular angezeigt werden soll");
contact_map.set("input_6_2", "Bitte tragen Sie hier Ihre Kontaktadresse ein");
contact_map.set("input_6_3", "Geben Sie bitte Ihren Namen an ");
contact_map.set("input_6_4", "Hier können Sie eintragen was am Beginn der automatischen Nachrichten des Kontaktformulars stehen soll");
contact_map.set("input_6_5", "Hier können Sie eintragen was am Ende der automatischen Nachrichten des Kontaktformulars stehen soll");

// Misc
misc_map.set("input_7_1", "Bitte tragen Sie hier den Inhaber der Webseite ein");
misc_map.set("input_7_2", "Bitte tragen Sie hier Ihre Firmenbuchnummer ein");
misc_map.set("input_7_3", "Bitte tragen Sie hier Ihren Unternehmensgegenstand ein");
misc_map.set("input_7_4", "Bitte tragen Sie hier Ihr Handelsgericht ein");
misc_map.set("input_7_5", "Bitte tragen Sie hier Ihren Firmensitz ein");
misc_map.set("input_7_6", "Bitte tragen Sie hier Ihre Adresse ein");
misc_map.set("input_7_7", "Bitte tragen Sie hier Ihren Standort ein");
misc_map.set("input_7_8", "Bitte tragen Sie hier Ihre Telefonnummer ein");
misc_map.set("input_7_9", "Bitte tragen Sie hier Ihre E-mail Adresse ein");
misc_map.set("input_7_10", "Bitte tragen Sie hier die Telefonnummer des Datenschutzbeauftragten ein");
misc_map.set("input_7_11", "Hier können Sie Ihre Datenschutzerklärung einfügen");

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

