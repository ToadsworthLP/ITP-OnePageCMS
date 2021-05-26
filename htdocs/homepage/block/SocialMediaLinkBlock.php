<?php

function SocialMediaLinkBlock(string $setting, string $icon) {
    if(Settings::get($setting)) {
        include "homepage/blocktype/navbars/SocialMediaLinkTemplate.php";
    }
}
