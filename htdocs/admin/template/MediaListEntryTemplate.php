<div class="col-lg-3 col-md-4 col-6">
    <a href="#exampleModal" class="media-list-entry" data-toggle="modal" data-target="#exampleModal" onclick="updateInfoModal(this)"
       class="d-block mb-4 h-100"
       data-id="<?= $id ?>" data-timestamp="<?= $timestamp ?>" data-filename="<?= $filename ?>"
       data-filesize="<?= $size ?>" data-fileurl="<?= PathConfig::IMAGE_PATH_FULL.$id ?>">
        <img class="img-fluid img-thumbnail" src="<?= $path ?>" alt="<?= $filename ?>">
    </a>
</div>