<?php
    include_once "common/gateway/SiteGateway.php";
    include_once "homepage/model/SiteTree.php";
    include_once "homepage/gateway/HomepageGateway.php";
    include_once "common/utility/Settings.php";

    $sliderData = null;
    if(Settings::get(SettingsConfig::SHOW_SLIDER)) {
        $sliderData = HomepageGateway::getSliderData();
    }

    $siteData = HomepageGateway::getSiteData(1);
    $siteTree = new SiteTree($siteData, $sliderData);

    if($siteTree->slides != null) {
        $slides = $siteTree->slides;
        $showIndicators = Settings::get(SettingsConfig::SLIDER_SHOW_INDICATORS);
        $showNavigation = Settings::get(SettingsConfig::SLIDER_SHOW_NAVIGATION);
        $sliderDelay = Settings::get(SettingsConfig::SLIDER_DELAY);
        include "homepage/blocktype/elements/slider.php";
    }

    foreach($siteTree->nodes as $id => $node) {
        include "homepage/blocktype/sections/" . $node->getType();
    }

    if(Settings::get(SettingsConfig::SHOW_CONTACT_FORM)) {
        include "homepage/blocktype/forms/contact-form-col-2.php";
    }
