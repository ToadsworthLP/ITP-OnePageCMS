<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bildname</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-8">
                            <img class="img-fluid modal-picture" src="mockup\media\bootstrap-solid.svg" alt="">
                        </div>
                        <div class="col-4">
                            <?php
                                include 'admin\template\MediaModalForm.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <button type="button" class="btn btn-light btn-block">Vorheriges Bild</button>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-secondary btn-block">Bild Löschen</button>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-light btn-block">Nächstes Bild</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>