<tr colspan="6" data-toggle="collapse" data-target="#demo<?=$id?>" class="accordion-toggle <?= ($even ? "user-row-odd" : "") ?>">
    <td class="user-id"><?=$id?></td>
    <td><?=$username?></td>
    <td>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill arrow-down" viewBox="0 0 16 16">
            <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
        </svg>
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