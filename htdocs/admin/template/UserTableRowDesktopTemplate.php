<tr>
    <th scope="row"><?=$id?></th>
    <td><?=$username?></td>
    <td><?=$email?></td>
    <td><?=$rolename?></td>
    <td>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle user-table-action-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Wählen... </span></button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <form method="post" action="<?= ReturnUtility::getLink(); ?>">
                    <input type="hidden" name="targetUser" value="<?=$id?>">
                    <button class="dropdown-item" type="submit">Bearbeiten</button>
                </form>
                <form method="post" action="admin.php?action=<?= AdminActions::RESET_PASSWORD ?>">
                    <input type="hidden" name="targetUser" value="<?=$id?>">
                    <button class="dropdown-item" type="submit">Passwort zurücksetzen</button>
                </form>
                <div class="dropdown-divider"></div>
                <form method="post" action="admin.php?action=<?= AdminActions::DELETE_USER ?>">
                    <input type="hidden" name="targetUser" value="<?=$id?>">
                    <button class="dropdown-item" type="submit">Löschen</button>
                </form>
            </div>
        </div>
    </td>
</tr>
