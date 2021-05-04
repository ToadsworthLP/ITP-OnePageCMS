<li id="item_1" class="siteeditor-list-item">
    <div class="accordion" id="accordionSection_1">
        <div class="card">
            <div class="card-header" id="heading_1">
                <div class="row">
                    <div class="col-1 siteeditor-move-icon">
                        <?php include 'admin/icon/MoveIcon.php'; ?>
                    </div>
                    <div class="col">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                                Slider 1
                            </button>
                        </h2>
                    </div>
                    <div class="col-1">
                        <form method="post" action="">
                            <input type="hidden" name="targetBlock" value="_1">
                            <button class="btn btn-light siteeditor-delete-button" type="submit">
                                <?php include 'admin/icon/DeleteIcon.php';?>
                            </button>
                        </form>
                    </div>
                </div>       
            </div>
            <div id="collapse_1" class="collapse show" aria-labelledby="heading_1" data-parent="#accordionSection_1">
                <?php include "admin/template/SiteEditorSliderFormTemplate.php"?>
            </div>
        </div>
    </div>
</li>