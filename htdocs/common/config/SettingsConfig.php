<?php

abstract class SettingsConfig
{
    const PAGE_TITLE = "pageTitle";
    const PAGE_DESCRIPTION = "pageDescription";
    const FULL_WIDTH = "fullWidth";
    const SHOW_SLIDER = "showSlider";
    const SLIDER_SHOW_INDICATORS = "sliderShowIndicators";
    const SLIDER_SHOW_NAVIGATION = "sliderShowNavigation";
    const SLIDER_DELAY = "sliderDelay";
    const PRIMARY_COLOR = "primaryColor";
    const SECONDARY_COLOR = "secondaryColor";
    const LIGHT_BACKGROUND = "lightBackground";
    const DARK_BACKGROUND = "darkBackground";
    const CONTACT_ADDRESS = "contactAddress";
    const CONTACT_NAME = "contactName";
    const CONTACT_EMAIL_HEADER = "contactEmailHeader";
    const CONTACT_EMAIL_FOOTER = "contactEmailFooter";
    const MENU_LOGO = "menuLogo";
    const FOOTER_LOGO = "footerLogo";
    const FAVICON = "favicon";
    const FACEBOOK_LINK = "facebookLink";
    const INSTAGRAM_LINK = "instagramLink";
    const TWITTER_LINK = "twitterLink";
    const FOOTER_LIGHT_BACKGROUND = "footerLightBackground";
    const FOOTER_DARK_BACKGROUND = "footerDarkBackground";
    const FOOTER_FONT_COLOR = "footerFontColor";
    const FOOTER_DESCRIPTION = "footerDescription";
    const COMPANY_NAME = "companyName";
    const COMPANY_ADDRESS = "companyAddress";
    const COMPANY_LOCATION = "companyLocation";
    const COMPANY_MAIL = "companyMail";
    const COMPANY_PHONE = "companyPhone";

    const DEFAULT_VALUES = [
        self::PAGE_TITLE => "New Page",
        self::PAGE_DESCRIPTION => "An example page.",
        self::FULL_WIDTH => false,
        self::SHOW_SLIDER => false,
        self::SLIDER_SHOW_INDICATORS => true,
        self::SLIDER_SHOW_NAVIGATION => true,
        self::SLIDER_DELAY => "5000",
        self::PRIMARY_COLOR => "#999999",
        self::SECONDARY_COLOR => "#cccccc",
        self::LIGHT_BACKGROUND => "#ffffff",
        self::DARK_BACKGROUND => "#111111",
        self::CONTACT_ADDRESS => "",
        self::CONTACT_NAME => "",
        self::CONTACT_EMAIL_HEADER => "",
        self::CONTACT_EMAIL_FOOTER => "",
        self::MENU_LOGO => "",
        self::FOOTER_LOGO => "",
        self::FAVICON => "",
        self::FACEBOOK_LINK => "",
        self::INSTAGRAM_LINK => "",
        self::TWITTER_LINK => "",
        self::FOOTER_LIGHT_BACKGROUND => "#2d3331",
        self::FOOTER_DARK_BACKGROUND => "#202624",
        self::FOOTER_FONT_COLOR => "#707070",
        self::FOOTER_DESCRIPTION => "",
        self::COMPANY_NAME => "",
        self::COMPANY_ADDRESS => "",
        self::COMPANY_LOCATION => "",
        self::COMPANY_MAIL => "",
        self::COMPANY_PHONE => ""
    ];
}
