<form method="post" action="admin.php?&action=<?=AdminActions::ADD_USER?>">
    <div class="container-fluid">
        <div class="row">
            <div id="input_4_1" class="col-lg-2 form-group">
                <label for="username" hidden>Benutzername</label>
                <input class="form-control" type="text" id="username" name="username" placeholder="Benutzername">
            </div>
            <div id="input_4_2" class="col-lg-2 form-group">
                <label for="email" hidden>E-Mail-Adresse</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail-Adresse">
            </div>
            <div id="input_4_3" class="col-lg-2 form-group">
                <label for="password" hidden>Passwort</label>
                <input class="form-control" type="text" id="password" name="password" placeholder="Passwort">
            </div>
            <div id="input_4_4" class="col-lg-2 form-group">
                <label for="role" hidden>Rolle zuweisen</label>
                <select class="form-control" id="role" name="role">
                    <option disabled selected>Rolle zuweisen</option>
                    <?= $roleOptions ?>
                </select>
            </div>
            <div class="col-lg-2">
                <button type="submit" class="btn btn-primary mb-2 user-save-btn">Speichern</button>
            </div>
        </div>
    </div>
</form>