<div class="form-group">
    <label title="Hier können Sie eine Spaltenüberschrift eintragen.">Überschrift</label>
    <input name="<?= $prefix ?>-title" type="text" class="form-control" value="<?= $attributes->get($prefix . "-title") ?>">
</div>
<div class="form-group">
    <label title="Hier können Sie eine Unterüberschrift eintragen.">Unterüberschrift</label>
    <input name="<?= $prefix ?>-subtitle" type="text" class="form-control" value="<?= $attributes->get($prefix . "-subtitle") ?>">
</div>
<div class="form-check">
    <input type="hidden" name="<?= $prefix ?>-separator" value="">
    <input name="<?= $prefix ?>-separator" class="form-check-input" type="checkbox" value="1" <?= $attributes->get($prefix . "-separator") == "" ? "" : "checked" ?>>
    <label title="Eine dekorative Trennlinie unter der Überschrift." class="form-check-label">
        Trennlinie
    </label>
</div>
<br>
<div class="custom-file mb-3">
    <input id="<?=$id?>-<?= $prefix ?>-background-image" type="hidden" name="@<?= $prefix ?>-background-image" value="<?=$attributes->get($prefix."-background-image")?>">
    <button title="Wählen Sie ein Bild für diese Spalte." id="<?=$id?>-<?= $prefix ?>-background-image-button" type="button" class="btn btn-block btn-secondary" data-toggle="modal"
            data-target="#media-selection-modal" onclick="setCurrentInputID('<?=$id?>-<?= $prefix ?>-background-image')">
        <?=isset($images[$prefix."-background-image"]) ? $images[$prefix."-background-image"]->filename." ausgewählt" : "Hintergrundbild wählen"?>
    </button>
</div>
<div class="form-group">
    <label title="Hier können Sie einen Text für diese Spalte eintragen.">Text</label>
    <textarea name="<?= $prefix ?>-textarea" class="form-control" rows="3"><?= $attributes->get($prefix . "-textarea") ?></textarea>
</div>
<hr>
<div class="form-group">
    <label title="Hier können Sie einen Link angeben. Dabei wird automatisch ein Button mit den Farben der globalen Einstellungen erzeugt.">Buttonlink</label>
    <input name="<?= $prefix ?>-buttonlink" type="text" class="form-control" value="<?= $attributes->get($prefix . "-buttonlink") ?>">
</div>
<div class="form-group">
    <label title="Hier können Sie angeben was in dem Button steht.">Buttontext</label>
    <input name="<?= $prefix ?>-buttontext" type="text" class="form-control" value="<?= $attributes->get($prefix . "-buttontext") ?>">
</div>
