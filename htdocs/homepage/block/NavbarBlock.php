<?php
    include_once "homepage/model/SiteTree.php";
    include_once "homepage/gateway/HomepageGateway.php";

    $siteData = HomepageGateway::getSiteData(1);
    $siteTree = new SiteTree($siteData);

    include "homepage/blocktype/navbars/navbar-1.php";
