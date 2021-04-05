<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th scope="col" class="table-start">ID</th>
        <th scope="col">Benutzername</th>
        <th scope="col">E-Mail-Adresse</th>
        <th scope="col">Rolle</th>
        <th scope="col" class="table-end">Aktion</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) UserTableRow($user); ?>
    </tbody>
</table>