<tr colspan="6" data-toggle="collapse" data-target="#demo<?=$id?>" class="accordion-toggle <?= ($even ? "user-row-odd" : "") ?>">
    <td class="user-id"><?=$id?></td>
    <td><?=$username?></td>
    <td>
        <?php include 'admin/icon/ArrowIcon.php'; ?>
    </td>
</tr>
<tr>
    <td colspan="6" class="hiddenRow">
        <div class="accordian-body collapse p-3" id="demo<?=$id?>">
            <div class="row">
                <div class="col">
                    Benutzername:
                </div>
                <div class="col">
                    <?=$username?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    E-Mail-Adresse:
                </div>
                <div class="col">
                    <?=$email?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Rolle:
                </div>
                <div class="col">
                    <?=$rolename?>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle user-table-action-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Wählen... </span></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <form method="post" action="<?= ReturnUtility::getLink(); ?>">
                                <input type="hidden" name="targetUser" value="<?=$id?>">
                                <button class="dropdown-item" type="submit">Bearbeiten</button>
                            </form>
                            <form method="post" action="admin.php?action="<?= AdminActions::RESET_PASSWORD ?>>
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
                </div>
            </div>
        </div>
    </td>
</tr>