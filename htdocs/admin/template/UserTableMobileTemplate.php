<table class="table" style="border-collapse:collapse;">
    <thead class="thead-dark">
    <tr>
        <th scope="col" class="table-start">ID</th>
        <th scope="col">Benutzername</th>
        <th scope="col" class="table-end"></th>
    </tr>
    </thead>
    <tbody>
    <?php
    $even = true;
    foreach ($users as $user) {
        UserTableRow($user, true, $even);
        $even = !$even;
    } ?>
    </tbody>
</table>