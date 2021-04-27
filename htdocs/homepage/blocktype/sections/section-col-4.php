<section id="<?=$node->getID()?>" class="my-section" style="background-color: <?=$node->getAttribute("background-color", "")?>">
    <div class="container">
        <div class="row">
            <div class="col section-heading">
                <!-- Heading -->
                <?php
                    include 'homepage/blocktype/elements/heading.php';
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <!-- Content -->
                <?php
                    $title = $node->getAttribute("4-1-title", "");
                    $subtitle = $node->getAttribute("4-1-subtitle", "");
                    $textarea = $node->getAttribute("4-1-textarea", "");
                    $buttontext = $node->getAttribute("4-1-buttontext", "");
                    $buttonlink = $node->getAttribute("4-1-buttonlink", "");
                    $separator = $node->getAttribute("4-1-separator", "");
                    include 'homepage/blocktype/elements/text-box.php';
                ?>
            </div>
            <div class="col-md-3">
                <!-- Content -->
                <?php
                    $title = $node->getAttribute("4-2-title", "");
                    $subtitle = $node->getAttribute("4-2-subtitle", "");
                    $textarea = $node->getAttribute("4-2-textarea", "");
                    $buttontext = $node->getAttribute("4-2-buttontext", "");
                    $buttonlink = $node->getAttribute("4-2-buttonlink", "");
                    $separator = $node->getAttribute("4-2-separator", "");
                    include 'homepage/blocktype/elements/text-box.php';
                ?>
            </div>
            <div class="col-md-3">
                <!-- Content -->
                <?php
                    $title = $node->getAttribute("4-3-title", "");
                    $subtitle = $node->getAttribute("4-3-subtitle", "");
                    $textarea = $node->getAttribute("4-3-textarea", "");
                    $buttontext = $node->getAttribute("4-3-buttontext", "");
                    $buttonlink = $node->getAttribute("4-3-buttonlink", "");
                    $separator = $node->getAttribute("4-3-separator", "");
                    include 'homepage/blocktype/elements/text-box.php';
                ?>
            </div>
            <div class="col-md-3">
                <!-- Content -->
                <?php
                    $title = $node->getAttribute("4-4-title", "");
                    $subtitle = $node->getAttribute("4-4-subtitle", "");
                    $textarea = $node->getAttribute("4-4-textarea", "");
                    $buttontext = $node->getAttribute("4-4-buttontext", "");
                    $buttonlink = $node->getAttribute("4-4-buttonlink", "");
                    $separator = $node->getAttribute("4-4-separator", "");
                    include 'homepage/blocktype/elements/text-box.php';
                ?>
            </div>
        </div>
    </div>
</section>