<?php if($slide->imagePath !== null): ?>
    <img src="<?=$slide->imagePath?>" class="d-block w-100" alt="...">
<?php endif; ?>
<div class="carousel-caption d-none d-md-block slider-heading">
    <h2><?=$slide->title?></h2>
    <hr class="heading-hairline">
    <h4><?=$slide->text?></h4>
    <?php if($slide->buttonText !== ""): ?>
        <!-- color: Schriftfarbe, onMouseover: buttonhoverfarbe, onMouseOut: buttonhintergrundfarbe -->
        <a class="btn btn-primary" href="<?=$slide->buttonLink?>" role="button" style="color: <?=$slide->buttonTextColor?>; background-color: <?=$slide->buttonColor?>" onMouseOver="this.style.backgroundColor='<?=$slide->buttonHoverColor?>'" onMouseOut="this.style.backgroundColor='<?=$slide->buttonColor?>'"><?=$slide->buttonText?></a>
    <?php endif; ?>
</div>