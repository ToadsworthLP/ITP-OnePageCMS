<?php

abstract class SettingsConfig
{
    const PAGE_TITLE = "pageTitle";
    const PAGE_DESCRIPTION = "pageDescription";
    const FULL_WIDTH = "fullWidth";
    const SHOW_SLIDER = "showSlider";
    const PRIMARY_COLOR = "primaryColor";
    const SECONDARY_COLOR = "secondaryColor";
    const LIGHT_BACKGROUND = "lightBackground";
    const DARK_BACKGROUND = "darkBackground";

    const DEFAULT_VALUES = [
        self::PAGE_TITLE => "New Page",
        self::PAGE_DESCRIPTION => "An example page.",
        self::FULL_WIDTH => false,
        self::SHOW_SLIDER => false,
        self::PRIMARY_COLOR => "#999999",
        self::SECONDARY_COLOR => "#cccccc",
        self::LIGHT_BACKGROUND => "#ffffff",
        self::DARK_BACKGROUND => "#111111"
    ];
}
