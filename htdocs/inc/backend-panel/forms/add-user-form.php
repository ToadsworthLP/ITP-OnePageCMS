<form>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 form-group">
                <label for="Username" hidden>Benutzername</label>
                <input class="form-control" type="text" id="Username" placeholder="Benutzername">
            </div>
            <div class="col-lg-3 form-group">
                <label for="Usermail" hidden>E-Mail-Adresse</label>
                <input type="email" class="form-control" id="Usermail" placeholder="E-Mail-Adresse">
            </div>
            <div class="col-lg-3 form-group">
                <label for="Userrole" hidden>Rolle zuweisen</label>
                <select class="form-control" id="Userrole">
                <option disabled selected>Rolle zuweisen</option>
                <option>Admin</option>
                <option>Redakteur</option>
                </select>
            </div>
            <div class="col-lg-3">
                <button type="submit" class="btn btn-primary mb-2 user-save-btn">Speichern</button>
            </div>
        </div>
    </div>
</form>