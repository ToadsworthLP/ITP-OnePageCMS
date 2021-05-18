<?php
    include_once "homepage/model/SiteTree.php";
    include_once "homepage/gateway/HomepageGateway.php";
    include_once "common/utility/Settings.php";

    $siteData = HomepageGateway::getSiteData(1);
    $siteTree = new SiteTree($siteData);

    include "homepage/blocktype/sections/section-footer.php";
