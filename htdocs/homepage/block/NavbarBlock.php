<?php
    include_once "homepage/model/SiteTree.php";
    include_once "homepage/gateway/HomepageGateway.php";
    include_once "common/utility/Settings.php";
    include_once "homepage/block/SocialMediaLinkBlock.php";

    $siteData = HomepageGateway::getSiteData(1);
    $siteTree = new SiteTree($siteData);

    include "homepage/blocktype/navbars/navbar-1.php";
