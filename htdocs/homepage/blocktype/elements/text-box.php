<div class="textbox">
    <h3><?=$title?></h3>
    <h5><?=$subtitle?></h5>
    <?php if($separator !== ""): ?>
        <hr class="textbox-hairline">
    <?php endif; ?>
    <p><?=$textarea?></p>
    <?php if($buttontext !== ""): ?>
        <a class="btn btn-primary" href="<?=$buttonlink?>" role="button"><?=$buttontext?></a>
    <?php endif; ?>
</div>