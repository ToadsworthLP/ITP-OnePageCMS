<div class="container login-container">
    <div class="row">
        <div class="col-12">
            <img src="mockup/media/de-press-icon-colored.svg" class="d-block" width="50%" style="margin-left: 20%; margin-bottom: 1rem;" alt="...">
        </div>
        <div class="col-12">
            <img src="mockup/media/de-press-name.svg" class="mx-auto d-block" width="80%" style="margin-bottom: 2rem;" alt="...">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <form method="post" action="admin.php?&action=<?=AdminActions::LOGIN?>">
                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="Username..." value="<?= $username ?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Passwort...">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="rememberUser"
                    <?= $rememberUser ? "checked" : "" ?>>
                    <label class="form-check-label" for="exampleCheck1">Benutzerdaten merken</label>
                </div>
                <hr>
                <div class="form-group">
                    <input class="btn btn-primary btn-block" type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</div>
