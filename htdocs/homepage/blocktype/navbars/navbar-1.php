<!-- Remove sticky-top class if you dont want the menu to be fixed at the top -->
<nav class="navbar sticky-top navbar-expand-md navbar-light bg-light">
    <!-- To change the menu from full-width to in-grid simple change container-fluid to container -->
    <div class="container">
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
                <li class="nav-item">
                    <a class="nav-link socialmedia-icon-link" href="<?= Settings::get(SettingsConfig::FACEBOOK_LINK) ?>">
                        <?php include 'mockup/inc/backend-panel/icons/facebook-icon.php'; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link socialmedia-icon-link" href="<?= Settings::get(SettingsConfig::INSTAGRAM_LINK) ?>">
                        <?php include 'mockup/inc/backend-panel/icons/instagram-icon.php'; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link socialmedia-icon-link" href="<?= Settings::get(SettingsConfig::TWITTER_LINK) ?>">
                        <?php include 'mockup/inc/backend-panel/icons/twitter-icon.php'; ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
