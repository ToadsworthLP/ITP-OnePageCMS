<div class="col">
    <div class="container-fluid">
        <div class="row">
        <div class="col">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">Benutzer</h1>
                        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Alerts -->
        <div class="row">
            <div class="col">
                <div class="alert alert-success" role="alert">
                This is a success alert—check it out!
                </div>
                <div class="alert alert-danger" role="alert">
                This is a danger alert—check it out!
                </div>
                <div class="alert alert-dark" role="alert">
                This is a dark alert—check it out!
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Neuen Benutzer anlegen
                    </div>
                    <div class="card-body">
                        <?php
                            include 'inc/backend-panel/forms/add-user-form.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row user-table-desktop">
            <div class="col">
                <?php
                    include 'inc/backend-panel/elements/user-list-desktop.php';
                ?>
            </div>
        </div>
        <div class="row user-table-mobile">
            <div class="col">
                <?php
                    include 'inc/backend-panel/elements/user-list-mobile.php';
                ?>
            </div>
        </div>
    </div>
</div>