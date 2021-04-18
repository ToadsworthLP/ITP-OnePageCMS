<li class="siteeditor-list-item">
    <div class="accordion" id="accordionSection">
        <div class="card">
            <div class="card-header" id="heading<?php echo $i; ?>">
                <h2 class="mb-0">
                    <div class="row">
                        <div class="col-1">
                            <?php
                            include 'admin/icon/MoveIcon.php';
                            ?>
                        </div>
                        <div class="col">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                #<?php echo $i; ?> - Sektionsname
                            </button>
                        </div>
                        <div class="col-1">
                            <?php
                            include 'admin/icon/DeleteIcon.php';
                            ?>
                        </div>
                    </div>
                </h2>
            </div>

            <div id="collapse<?php echo $i; ?>" class="collapse show" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordionSection">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <?php
                                include 'mockup/inc/backend-panel/forms/siteeditor-section-form.php';
                                ?>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-block btn-primary" type="submit">Abschnitt speichern</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>