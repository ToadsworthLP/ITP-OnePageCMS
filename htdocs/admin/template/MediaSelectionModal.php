<div class="modal fade" id="mediaSelectionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hintergrundbild wählen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <strong>Bild hochladen</strong>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <?php
                                include 'admin/template/MediaUploadTemplate.php';
                            ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <strong>Bild wählen</strong>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <?php
                                include 'admin/template/MediaSelectionBlock.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-primary btn-block">Auswahl speichern</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>