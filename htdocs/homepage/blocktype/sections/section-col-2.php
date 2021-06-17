<?php
$selector = $node->getAttribute("selector", "");
$selector == "" ? $node->getID() : $selector;
?>
<section id="<?=$selector?>" class="my-section" style="background: url('<?=$node->getAttributeFilePath("background-image", "")?>') <?=$node->getAttribute("background-color", "#ffffff") == "#ffffff" ? $globalBackgroundColor : $node->getAttribute("background-color", "")?>; background-repeat: no-repeat; background-size: cover">
    <div class="<?=$node->getAttribute("fullwidth", "") == true ? "container-fluid" : "container"?>">
        <div class="<?=Settings::get(SettingsConfig::FULL_WIDTH) == true ? "container-fluid" : "container"?>">
            <div class="row">
                <div class="col section-heading">
                    <!-- Heading -->
                    <?php
                        include 'homepage/blocktype/elements/heading.php';
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- Content -->
                    <?php
                        $title = $node->getAttribute("2-1-title", "");
                        $subtitle = $node->getAttribute("2-1-subtitle", "");
                        $textarea = $node->getAttribute("2-1-textarea", "");
                        $buttontext = $node->getAttribute("2-1-buttontext", "");
                        $buttonlink = $node->getAttribute("2-1-buttonlink", "");
                        $separator = $node->getAttribute("2-1-separator", "");
                        $imagePath = $node->getAttributeFilePath("2-1-background-image","");
                        include 'homepage/blocktype/elements/text-box.php';
                    ?>
                </div>
                <div class="col-md-6">
                    <!-- Content -->
                    <?php
                        $title = $node->getAttribute("2-2-title", "");
                        $subtitle = $node->getAttribute("2-2-subtitle", "");
                        $textarea = $node->getAttribute("2-2-textarea", "");
                        $buttontext = $node->getAttribute("2-2-buttontext", "");
                        $buttonlink = $node->getAttribute("2-2-buttonlink", "");
                        $separator = $node->getAttribute("2-2-separator", "");
                        $imagePath = $node->getAttributeFilePath("2-2-background-image","");
                        include 'homepage/blocktype/elements/text-box.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
