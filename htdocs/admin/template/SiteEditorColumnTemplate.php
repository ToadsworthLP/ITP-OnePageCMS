<div class="form-group">
    <label>Überschrift</label>
    <input name="<?=$prefix?>-title" type="text" class="form-control" value="<?=$attributes->get($prefix . "-title")?>">
</div>
<div class="form-group">
    <label>Unterüberschrift</label>
    <input type="text" class="form-control">
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="">
  <label class="form-check-label">
    Trennlinie
  </label>
</div>
<br>
<div class="custom-file mb-3">
    <button type="button" class="btn btn-block btn-secondary" data-toggle="modal" data-target="#mediaSelectionModal">
        Hintergrundbild wählen
    </button>
</div>
<div class="form-group">
    <label>Text</label>
    <textarea class="form-control" rows="3"></textarea>
</div>
<hr>
<div class="form-group">
    <label>Buttonlink</label>
    <input type="text" class="form-control">
</div>
<div class="form-group">
    <label>Buttontext</label>
    <input type="text" class="form-control">
</div>
