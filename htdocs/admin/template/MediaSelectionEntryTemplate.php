<div class="col-lg-3 col-md-4 col-6">
    <div class="btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-primary mediaSelectionButton active">
            <input type="checkbox" checked autocomplete="off">
            <img class="img-fluid img-thumbnail mediaSelectionImage" src="<?= $path ?>" alt="<?= $filename ?>"
            onclick="updateSelectedFile(<?= $id ?>, '<?= $filename ?>')">
        </label>
    </div>
</div>