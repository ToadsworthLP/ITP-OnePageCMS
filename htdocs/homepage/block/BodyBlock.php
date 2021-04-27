<?php
    include_once "homepage/model/SiteTree.php";
    include_once "homepage/gateway/HomepageGateway.php";

    $siteData = HomepageGateway::getSiteData(1);
    $siteTree = new SiteTree($siteData);

    foreach($siteTree->nodes as $id => $node) {
        include "homepage/blocktype/sections/" . $node->getType();
    }



