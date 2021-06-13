<form method="post" action="admin.php?&action=<?=AdminActions::EDIT_USER?>">
    <input type="hidden" name="targetUser" value="<?=$id?>">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 form-group">
                <label for="username<?=$id?>" hidden>Benutzername</label>
                <input class="form-control" type="text" name="username" placeholder="Benutzername" value="<?=$username?>">
            </div>
            <div class="col-lg-2 form-group">
                <label for="email<?=$id?>" hidden>E-Mail-Adresse</label>
                <input type="email" class="form-control" name="email" placeholder="E-Mail-Adresse" value="<?=$email?>">
            </div>
            <?php if ($editingSelf): ?>
                <div class="col-lg-2 form-group">
                    <label for="password<?=$id?>" hidden>Passwort</label>
                    <input type="password" class="form-control" name="password" placeholder="Neues Passwort" value="">
                </div>
                <div class="col-lg-2 form-group">
                    <label for="confirmPassword<?=$id?>" hidden>Passwort bestätigen</label>
                    <input type="password" class="form-control"name="confirmPassword" placeholder="Passwort bestätigen" value="">
                </div>
            <?php endif; ?>
            <div class="col-lg-2 form-group">
                <label for="role<?=$id?>" hidden>Rolle zuweisen</label>
                <select class="form-control" name="role">
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
