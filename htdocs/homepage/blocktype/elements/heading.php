<h2><?=$node->getAttribute("title", "")?></h2>
<h5><?=$node->getAttribute("subtitle", "")?></h5>
<?php if($node->getAttribute("separator", "") !== ""): ?>
    <hr class="heading-hairline" style="background-color: <?=Settings::get(SettingsConfig::PRIMARY_COLOR)?>">
<?php endif; ?>
<p><?=$node->getAttribute("textarea", "")?></p>
