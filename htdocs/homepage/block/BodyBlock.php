<?php
    include_once "common/gateway/SiteGateway.php";
    include_once "homepage/model/SiteTree.php";
    include_once "homepage/gateway/HomepageGateway.php";

    $site = SiteGateway::fetch(["id" => 1]);
    $siteData = HomepageGateway::getSiteData($site->getID());

    $sliderData = null;
    if($site->showSlider) $sliderData = HomepageGateway::getSliderData();

    $siteTree = new SiteTree($siteData, $sliderData);

    foreach($siteTree->nodes as $id => $node) {
        include "homepage/blocktype/sections/" . $node->getType();
    }



