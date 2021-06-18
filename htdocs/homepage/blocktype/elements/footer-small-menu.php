<h4 style="color: <?=Settings::get(SettingsConfig::FOOTER_FONT_COLOR)?>">Links</h4>
<ul class="nav flex-column">
    <?php
        foreach($siteTree->nodes as $id => $node) {
            if($node->getAttribute("menu-option", "") !== ""): ?>
                <li class="nav-item">
                    <a class="nav-link" style="color: <?=Settings::get(SettingsConfig::FOOTER_FONT_COLOR)?>" href="#<?=$node->getAttribute("selector", "")?>"><?=$node->getAttribute("menu-text", "Unbenannt")?></a>
                </li>
            <?php endif;
        }
    ?>
</ul>
