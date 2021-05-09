<?php
    include_once "common/gateway/SiteGateway.php";
    include_once "homepage/model/SiteTree.php";
    include_once "homepage/gateway/HomepageGateway.php";
    include_once "common/utility/Settings.php";

    $siteData = HomepageGateway::getSiteData(1);

    $sliderData = null;
    if(Settings::get(SettingsConfig::SHOW_SLIDER)) $sliderData = HomepageGateway::getSliderData();

    $siteTree = new SiteTree($siteData, $sliderData);

    foreach($siteTree->nodes as $id => $node) {
        include "homepage/blocktype/sections/" . $node->getType();
    }
