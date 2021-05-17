<?php
include_once "common/utility/Settings.php";
include_once "admin/block/SettingsResetButtonBlock.php";
include_once "admin/block/MediaSelectionModalBlock.php";

function GlobalSettingsBlock() {
    $allFiles = MediaSelectionModalBlock();

    $menuLogoId = Settings::get(SettingsConfig::MENU_LOGO);
    $footerLogoId = Settings::get(SettingsConfig::FOOTER_LOGO);
    $faviconId = Settings::get(SettingsConfig::FAVICON);

    $menuLogo = null;
    $footerLogo = null;
    $favicon = null;

    foreach ($allFiles as $file) { // Find files to show currently selected filenames
        if($file->getID() == $menuLogoId) {
            $menuLogo = $file;
        } else if($file->getID() == $footerLogoId) {
            $footerLogo = $file;
        } else if($file->getID() == $faviconId) {
            $favicon = $file;
        }
    }

    include "admin/template/DashboardGlobalSettingsForm.php";
}
