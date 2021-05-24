<section id="<?=$node->getID()?>" class="my-section" style="background: url('<?=$node->getAttributeFilePath("background-image", "")?>') <?=$node->getAttribute("background-color", "")?>; background-repeat: no-repeat; background-size: cover">
    <div class="<?=$node->getAttribute("fullwidth", "") == true ? "container-fluid" : "container"?>">
        <div class="row">
            <div class="col section-heading">
                <!-- Heading -->
                <?php
                    include 'homepage/blocktype/elements/heading.php';
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <!-- Content -->
                <?php
                    $title = $node->getAttribute("3-1-title", "");
                    $subtitle = $node->getAttribute("3-1-subtitle", "");
                    $textarea = $node->getAttribute("3-1-textarea", "");
                    $buttontext = $node->getAttribute("3-1-buttontext", "");
                    $buttonlink = $node->getAttribute("3-1-buttonlink", "");
                    $separator = $node->getAttribute("3-1-separator", "");
                    $imagePath = $node->getAttributeFilePath("3-1-background-image","");
                    include 'homepage/blocktype/elements/text-box.php';
                ?>
            </div>
            <div class="col-sm-4">
                <!-- Content -->
                <?php
                    $title = $node->getAttribute("3-2-title", "");
                    $subtitle = $node->getAttribute("3-2-subtitle", "");
                    $textarea = $node->getAttribute("3-2-textarea", "");
                    $buttontext = $node->getAttribute("3-2-buttontext", "");
                    $buttonlink = $node->getAttribute("3-2-buttonlink", "");
                    $separator = $node->getAttribute("3-2-separator", "");
                    $imagePath = $node->getAttributeFilePath("3-2-background-image","");
                    include 'homepage/blocktype/elements/text-box.php';
                ?>
            </div>
            <div class="col-sm-4">
                <!-- Content -->
                <?php
                    $title = $node->getAttribute("3-3-title", "");
                    $subtitle = $node->getAttribute("3-3-subtitle", "");
                    $textarea = $node->getAttribute("3-3-textarea", "");
                    $buttontext = $node->getAttribute("3-3-buttontext", "");
                    $buttonlink = $node->getAttribute("3-3-buttonlink", "");
                    $separator = $node->getAttribute("3-3-separator", "");
                    $imagePath = $node->getAttributeFilePath("3-3-background-image","");
                    include 'homepage/blocktype/elements/text-box.php';
                ?>
            </div>
        </div>
    </div>
</section>