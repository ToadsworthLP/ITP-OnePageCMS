<li id="item-1" class="socialmedia-list-item">
    <div class="accordion" id="socialmedia-accordion-1">
        <div class="card">
            <div class="card-header" id="heading_1">
                <div class="row">
                    <div class="col-1 siteeditor-move-icon">
                        <?php include 'admin/icon/MoveIcon.php'; ?>
                    </div>
                    <div class="col">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="#socialmedia-accordion-1">
                                Socialmedia-Icon-1
                            </button>
                        </h2>
                    </div>
                    <div class="col-1">
                        <form method="post" action="admin.php?action=">
                            <input type="hidden" name="id" value="1">
                            <button class="btn btn-light siteeditor-delete-button" type="submit">
                                <?php include 'admin/icon/DeleteIcon.php';?>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div id="collapse-1" class="collapse show" aria-labelledby="heading_1" data-parent="#socialmedia-accordion-1">
                <form method="post" action="admin.php?&action=">
                    <input type="hidden" name="id" value="1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" hidden>Socialmedia-Plattform</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                    <!-- <i class="bi bi-facebook"></i> -->
                                    <option selected>Wählen...</selected>
                                    <option value="bi bi-facebook">Facebook</option>
                                    <option value="bi bi-instagram">Instagram</option>
                                    <option value="bi bi-twitter">Twitter</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" hidden>Link</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Profil-Adresse" value="">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-block btn-primary" type="submit">Link speichern</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</li>
