<h4>Links</h4>
<ul class="nav flex-column">
    <?php
        foreach($siteTree->nodes as $id => $node) {
            if($node->getAttribute("menu-option", "") !== ""): ?>
                <li class="nav-item">
                    <a class="nav-link" href="#<?=$node->getID()?>"><?=$node->getAttribute("title", "Unbenannt")?></a>
                </li>
            <?php endif;
        }
    ?>
</ul>