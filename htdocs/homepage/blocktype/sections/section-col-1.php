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
                <div class="col-12">
                    <?php
                        $title = $node->getAttribute("1-1-title", "");
                        $subtitle = $node->getAttribute("1-1-subtitle", "");
                        $textarea = $node->getAttribute("1-1-textarea", "");
                        $buttontext = $node->getAttribute("1-1-buttontext", "");
                        $buttonlink = $node->getAttribute("1-1-buttonlink", "");
                        $separator = $node->getAttribute("1-1-separator", "");
                        $imagePath = $node->getAttributeFilePath("1-1-background-image","");
                        include 'homepage/blocktype/elements/text-box.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
