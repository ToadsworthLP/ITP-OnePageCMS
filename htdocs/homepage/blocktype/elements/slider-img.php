<?php if($slide->imagePath !== null): ?>
    <img src="<?=$slide->imagePath?>" class="d-block w-100 slider-" alt="...">
<?php endif; ?>
<div class="carousel-caption d-none d-md-block slider-heading">
    <h2 style="color: <?=$slide->buttonTextColor?>"><?=$slide->title?></h2>
    <hr class="heading-hairline" style="background-color: <?=Settings::get(SettingsConfig::PRIMARY_COLOR)?>">
    <h4 style="color: <?=$slide->buttonTextColor?>"><?=$slide->text?></h4>
    <?php if($slide->buttonText !== ""): ?>
        <!-- color: Schriftfarbe, onMouseover: buttonhoverfarbe, onMouseOut: buttonhintergrundfarbe -->
        <a class="btn btn-primary" href="<?=$slide->buttonLink?>" role="button" style="color: <?=$slide->buttonTextColor?>; background-color: <?=$slide->buttonColor?>;"><?=$slide->buttonText?></a>
    <?php endif; ?>
</div>