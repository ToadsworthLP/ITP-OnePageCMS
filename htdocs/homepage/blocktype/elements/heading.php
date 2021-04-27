<h2><?=$node->getAttribute("title", "")?></h2>
<h5><?=$node->getAttribute("subtitle", "")?></h5>
<?php if($node->getAttribute("separator", "") !== ""): ?>
    <hr class="heading-hairline">
<?php endif; ?>
<p><?=$node->getAttribute("textarea", "")?></p>
