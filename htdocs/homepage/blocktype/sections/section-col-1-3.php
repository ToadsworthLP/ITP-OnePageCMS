<section id="<?=$node->getID()?>" class="my-section" style="background: <?=$node->getAttribute("background-color", "")?> url('') no-repeat cover">
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
            <div class="col-md-4">
                <!-- Content -->
                <?php
                    $title = $node->getAttribute("6-1-title", "");
                    $subtitle = $node->getAttribute("6-1-subtitle", "");
                    $textarea = $node->getAttribute("6-1-textarea", "");
                    $buttontext = $node->getAttribute("6-1-buttontext", "");
                    $buttonlink = $node->getAttribute("6-1-buttonlink", "");
                    $separator = $node->getAttribute("6-1-separator", "");
                    include 'homepage/blocktype/elements/text-box.php';
                ?>
            </div>
            <div class="col-md-8">
                <!-- Content -->
                <?php
                    $title = $node->getAttribute("6-2-title", "");
                    $subtitle = $node->getAttribute("6-2-subtitle", "");
                    $textarea = $node->getAttribute("6-2-textarea", "");
                    $buttontext = $node->getAttribute("6-2-buttontext", "");
                    $buttonlink = $node->getAttribute("6-2-buttonlink", "");
                    $separator = $node->getAttribute("6-2-separator", "");
                    include 'homepage/blocktype/elements/text-box.php';
                ?>
            </div>
        </div>
    </div>
</section>