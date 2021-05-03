<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hochgeladene Datei</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-8">
                            <img class="img-fluid modal-picture" id="media-modal-fullimg" src="mockup\media\bootstrap-solid.svg" alt="">
                        </div>
                        <div class="col-4">
                            <?php
                                include 'admin\template\MediaModalFormTemplate.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <button type="button" id="media-modal-previous" class="btn btn-light btn-block">Vorheriges Bild</button>
                        </div>
                        <div class="col-4">
                            <form method="post" action="admin.php?&action=<?= AdminActions::DELETE_IMAGE ?>">
                                <input type="hidden" name="target" class="form-target" value="">
                                <button type="submit" class="btn btn-secondary btn-block">Löschen</button>
                            </form>
                        </div>
                        <div class="col-4">
                            <button type="button" id="media-modal-next" class="btn btn-light btn-block">Nächstes Bild</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>