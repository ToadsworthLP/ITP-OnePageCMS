<!-- Remove sticky-top class if you dont want the menu to be fixed at the top -->
<nav class="navbar sticky-top navbar-expand-md navbar-light bg-light">
    <!-- To change the menu from full-width to in-grid simple change container-fluid to container -->
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="mockup\media\bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            <!-- Seitenname -->
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
            </ul>
        </div>
    </div>
</nav>