<li class="siteeditor-list-item">
    <div class="accordion" id="accordionSection">
        <div class="card">
            <div class="card-header" id="heading<?php echo $i; ?>">
                <h2 class="mb-0">
                    <div class="row">
                        <div class="col-1">
                            <?php include 'admin/icon/MoveIcon.php'; ?>
                        </div>
                        <div class="col">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                <?=$attributes->get("title", "Unbenannte Sektion")?>
                            </button>
                        </div>
                        <div class="col-1">
                            <form method="post" action="admin.php?action=<?= AdminActions::DELETE_BLOCK ?>">
                                <input type="hidden" name="targetBlock" value="<?=$id?>">
                                <button type="submit">
                                    <?php include 'admin/icon/DeleteIcon.php'; // TODO make button invisible and just show the X ?>
                                </button>
                            </form>
                        </div>
                    </div>
                </h2>
            </div>

            <div id="collapse<?php echo $i; ?>" class="collapse show" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordionSection">
                <?php include "admin/template/SiteEditorSectionFormTemplate.php"?>
            </div>
        </div>
    </div>
</li>