<div class="alert <?=$class?>" role="alert">
    <?=$text?>
    <?php if($enableDismissButton):?>
        <form method="post" action="admin.php?&action=<?=AdminActions::DISMISS_ALERT?>">
            <input type="hidden" name="index" value="<?=$index?>">
            <input type="submit" value="X">
        </form>
    <?php endif;?>
</div>