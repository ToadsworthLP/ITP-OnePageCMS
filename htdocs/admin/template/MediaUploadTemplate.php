<form enctype="multipart/form-data" method="post" action="admin.php?&action=<?= AdminActions::UPLOAD_IMAGE ?>"">
    <div class="input-group is-invalid">
        <div id="input_5_1" class="custom-file">
            <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile" name="upload" required>
            <label class="custom-file-label media-upload" for="validatedInputGroupCustomFile">Datei wählen...</label>
        </div>
        <div class="input-group-append">
            <input type="submit" class="btn btn-primary" value="Hochladen">
        </div>
    </div>
    <div class="invalid-feedback">
        Example invalid input group feedback
    </div>
</form>