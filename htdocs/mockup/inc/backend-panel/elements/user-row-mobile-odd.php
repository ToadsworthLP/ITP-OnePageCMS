<tr colspan="6" data-toggle="collapse" data-target="#demo<?php echo $j; ?>" class="accordion-toggle user-row-odd">
	<td class="user-id"><?php echo $j; ?></td>
	<td>TestAdmin</td>
    <td>
        <?php
            include 'inc/backend-panel/icons/user-arrow-icon.php';
        ?>
    </td>
</tr>
<tr>
	<td colspan="6" class="hiddenRow">
		<div class="accordian-body collapse p-3" id="demo<?php echo $j; ?>">
			<div class="row">
                <div class="col">
                    Benutzername:
                </div>
                <div class="col">
                    username
                </div>
            </div>
            <div class="row">
                <div class="col">
                    E-Mail-Adresse:
                </div>
                <div class="col">
                    usermail
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Rolle:
                </div>
                <div class="col">
                    userrole
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <?php
                        include 'inc/backend-panel/elements/user-actions-dropmenu.php';
                    ?>
                </div>
            </div>
	    </div> 
	</td> 
</tr>