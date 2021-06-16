<div class="textbox">
    <?php if($imagePath !== ""): ?>
        <img src="<?=$imagePath?>" class="img-fluid textbox-icon-img" alt="...">
    <?php endif; ?>
    <h3><?=$title?></h3>
    <h5><?=$subtitle?></h5>
    <?php if($separator !== ""): ?>
        <hr class="textbox-hairline" style="background-color: <?=Settings::get(SettingsConfig::PRIMARY_COLOR)?>">
    <?php endif; ?>
    <p><?=$textarea?></p>
    <?php if($buttontext !== ""): ?>
        <a class="btn btn-primary" href="<?=$buttonlink?>" role="button" style="background-color: <?=Settings::get(SettingsConfig::PRIMARY_COLOR)?>;" onMouseOver="this.style.backgroundColor='<?=Settings::get(SettingsConfig::SECONDARY_COLOR)?>'" onMouseOut="this.style.backgroundColor='<?=Settings::get(SettingsConfig::PRIMARY_COLOR)?>'"><?=$buttontext?></a>
    <?php endif; ?>
</div>