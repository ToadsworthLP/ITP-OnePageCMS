<div id="<?=$node->getID()?>" class="container-fluid footer" style="color: <?=Settings::get(SettingsConfig::FOOTER_FONT_COLOR)?> !important; background-color: <?=Settings::get(SettingsConfig::FOOTER_LIGHT_BACKGROUND)?>">
    <div class="container">
        <!-- To change from 4 to 2 columns change to row-cols-2, this still keeps the 4 content columns -->
        <div class="row">
            <div class="col-sm footer-content">
                <!-- Content -->
                <?php
                    include 'homepage/blocktype/elements/footer-brand.php';
                ?>
            </div>
            <div class="col-sm footer-content">
                <!-- Content -->
                <?php
                    include 'homepage/blocktype/elements/footer-small-menu.php';
                ?>
            </div>
            <div class="col-sm footer-content">
                <!-- Content -->
                <?php
                    include 'homepage/blocktype/elements/footer-contact-information.php';
                ?>
            </div>
        </div>
    </div>  
</div>
<div class="container-fluid copyright" style="color: <?=Settings::get(SettingsConfig::FOOTER_FONT_COLOR)?>; background-color: <?=Settings::get(SettingsConfig::FOOTER_DARK_BACKGROUND)?>">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <p>&#169; Copyright 2021 - <?= Settings::get(SettingsConfig::COMPANY_NAME) ?></p>
            </div>
            <div class="col-sm footer-bottom-link">
                <a href="#" data-toggle="modal" data-target="#data-protection-modal">Datenschutzerklärung</a>
                <a href="#" data-toggle="modal" data-target="#impress-modal">Impressum</a>
            </div>
        </div>
    </div>
</div>
