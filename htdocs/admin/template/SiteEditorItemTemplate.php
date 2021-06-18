<li id="item_<?=$id?>" class="siteeditor-list-item">
    <div class="accordion" id="accordionSection<?=$id?>">
        <div class="card">
            <div class="card-header" id="heading<?php echo $i; ?>">
                <div class="row">
                    <div class="col-1 siteeditor-move-icon">
                        <?php include 'admin/icon/MoveIcon.php'; ?>
                    </div>
                    <div class="col">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                <?=$attributes->get("selector", "Unbenannte Sektion")?>
                            </button>
                        </h2>
                    </div>
                    <div class="col-1">
                        <form method="post" action="admin.php?action=<?= AdminActions::DELETE_BLOCK ?>">
                            <input type="hidden" name="targetBlock" value="<?=$id?>">
                            <button class="btn btn-light siteeditor-delete-button" type="submit" data-toggle="tooltip" data-placement="left" data-html="true" title="Sektion entfernen">
                                <?php include 'admin/icon/DeleteIcon.php';?>
                            </button>
                        </form>
                    </div>
                </div>       
            </div>
            <div id="collapse<?=$id?>" class="collapse show" aria-labelledby="heading<?=$id?>" data-parent="#accordionSection<?=$id?>">
                <?php include "admin/template/SiteEditorSectionFormTemplate.php"?>
            </div>
        </div>
    </div>
</li>
