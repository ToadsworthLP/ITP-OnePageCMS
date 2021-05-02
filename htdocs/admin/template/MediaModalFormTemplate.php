<div class="row">
    <p>
        <strong>Hochgeladen am: </strong><a id="media-modal-timestamp">25. Januar 2021</a></br>
        <strong >Dateiname: </strong><a id="media-modal-filename">Name</a></br>
        <strong >Dateigröße: </strong><a id="media-modal-filesize">000 kB</a></br>
    </p>
</div>
<hr>
<form method="post" action="admin.php?&action=<?= AdminActions::RENAME_IMAGE ?>"">
    <input type="hidden" name="target" class="form-target" value="">
    <div class="row">
        <label for="exampleFormControlInput1">Umbenennen</label>
        <input id="exampleFormControlInput1" class="form-control" type="text" placeholder="Neuer Dateiname..." name="filename">
    </div>
    <br>
    <div class="row">
        <button type="submit" class="btn btn-block btn-primary">Speichern</button>
    </div>
    <br>
    <div class="row">
        <label for="media-modal-fileurl">Bild-URL</label>
        <input id="media-modal-fileurl" class="form-control" type="text" placeholder="" readonly>
    </div>
</form>