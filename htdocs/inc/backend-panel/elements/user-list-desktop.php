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
    <?php
      for($i = 1; $i < 11; $i++){
        include 'inc/backend-panel/elements/user-row-desktop.php';
      }
    ?>
  </tbody>
</table>