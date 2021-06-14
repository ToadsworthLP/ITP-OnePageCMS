<form method="post" action="admin.php?&action=<?=AdminActions::EDIT_USER?>">
    <input type="hidden" name="targetUser" value="<?=$id?>">
    <div class="container-fluid">
        <div class="row">
            <div  id="input_4_5" class="col-lg-2 form-group">
                <label for="username<?=$id?>" hidden>Benutzername</label>
                <input class="form-control" type="text" name="username" placeholder="Benutzername" value="<?=$username?>">
            </div>
            <div  id="input_4_6" class="col-lg-2 form-group">
                <label for="email<?=$id?>" hidden>E-Mail-Adresse</label>
                <input type="email" class="form-control" name="email" placeholder="E-Mail-Adresse" value="<?=$email?>">
            </div>
            <?php if ($editingSelf): ?>
                <div  id="input_4_7" class="col-lg-2 form-group">
                    <label for="password<?=$id?>" hidden>Passwort</label>
                    <input type="password" class="form-control" name="password" placeholder="Neues Passwort" value="">
                </div>
                <div  id="input_4_8" class="col-lg-2 form-group">
                    <label for="confirmPassword<?=$id?>" hidden>Passwort bestätigen</label>
                    <input type="password" class="form-control"name="confirmPassword" placeholder="Passwort bestätigen" value="">
                </div>
            <?php endif; ?>
            <div  id="input_4_9" class="col-lg-2 form-group">
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
