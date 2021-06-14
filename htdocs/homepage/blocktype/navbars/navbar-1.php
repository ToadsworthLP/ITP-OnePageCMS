<!-- Remove sticky-top class if you dont want the menu to be fixed at the top -->
<nav class="navbar sticky-top navbar-expand-md navbar-light bg-light">
    <!-- To change the menu from full-width to in-grid simple change container-fluid to container -->
    <div class="<?=Settings::get(SettingsConfig::FULL_WIDTH) == true ? "container-fluid" : "container"?>">
        <a class="navbar-brand" href="#">
            <img src="<?= PathConfig::IMAGE_PATH_FULL.Settings::get(SettingsConfig::MENU_LOGO) ?>" width="30" height="30" class="d-inline-block align-top" alt="">
            <?=Settings::get(SettingsConfig::PAGE_TITLE)?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <?php
                    foreach($siteTree->nodes as $id => $node) {
                        if($node->getAttribute("menu-option", "") !== ""): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#<?=$node->getID()?>"><?=$node->getAttribute("title", "Unbenannt")?></a>
                            </li>
                        <?php endif;
                    }
                ?>
                <?php SocialMediaLinkBlock(SettingsConfig::FACEBOOK_LINK, "FacebookIcon.php"); ?>
                <?php SocialMediaLinkBlock(SettingsConfig::INSTAGRAM_LINK, "InstagramIcon.php"); ?>
                <?php SocialMediaLinkBlock(SettingsConfig::TWITTER_LINK, "TwitterIcon.php"); ?>
                <?php SocialMediaLinkBlock(SettingsConfig::LINKEDIN_LINK, "LinkedInIcon.php"); ?>
                <?php SocialMediaLinkBlock(SettingsConfig::YOUTUBE_LINK, "YouTubeIcon.php"); ?>
                <?php SocialMediaLinkBlock(SettingsConfig::ANY_LINK, "AnyLinkIcon.php"); ?>
            </ul>
        </div>
    </div>
</nav>
