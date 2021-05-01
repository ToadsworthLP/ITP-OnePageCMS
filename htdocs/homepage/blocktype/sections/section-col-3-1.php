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
            <div class="col-md-8">
                <!-- Content -->
                <?php
                    $title = $node->getAttribute("5-1-title", "");
                    $subtitle = $node->getAttribute("5-1-subtitle", "");
                    $textarea = $node->getAttribute("5-1-textarea", "");
                    $buttontext = $node->getAttribute("5-1-buttontext", "");
                    $buttonlink = $node->getAttribute("5-1-buttonlink", "");
                    $separator = $node->getAttribute("5-1-separator", "");
                    include 'homepage/blocktype/elements/text-box.php';
                ?>
            </div>
            <div class="col-md-4">
                <!-- Content -->
                <?php
                    $title = $node->getAttribute("5-2-title", "");
                    $subtitle = $node->getAttribute("5-2-subtitle", "");
                    $textarea = $node->getAttribute("5-2-textarea", "");
                    $buttontext = $node->getAttribute("5-2-buttontext", "");
                    $buttonlink = $node->getAttribute("5-2-buttonlink", "");
                    $separator = $node->getAttribute("5-2-separator", "");
                    include 'homepage/blocktype/elements/text-box.php';
                ?>
            </div>
        </div>
    </div>
</section>