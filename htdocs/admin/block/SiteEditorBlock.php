<li class="siteeditor-list-item">
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <div class="row">
                        <div class="col-1">
                                    <?php
                                    include 'mockup/inc/backend-panel/icons/siteeditor-move-icon.php';
                                    ?>
                        </div>
                        <div class="col">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                #1 - Sektionsname      
                            </button>
                        </div>
                        <div class="col-1">
                            <?php
                                include 'mockup/inc/backend-panel/icons/siteeditor-delete-icon.php';
                            ?>
                        </div>
                    </div>
                </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
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