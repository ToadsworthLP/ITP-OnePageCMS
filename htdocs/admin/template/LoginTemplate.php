<div class="container">
    <div class="row">
        <div class="col">
            <img src="../htdocs/mockup/media/bootstrap-solid.svg" class="logo-login" alt="...">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="post" action="admin.php?&action=<?=AdminActions::LOGIN?>">
                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="Username...">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Passwort...">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
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