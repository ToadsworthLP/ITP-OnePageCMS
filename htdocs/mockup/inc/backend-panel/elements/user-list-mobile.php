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
            for($j = 1; $j < 11; $j++){
				if($j % 2 == 1){
					include 'mockup/inc/backend-panel/elements/user-row-mobile-odd.php';
				}else{
					include 'mockup/inc/backend-panel/elements/user-row-mobile-even.php';
				}
            }
        ?>
	</tbody>
</table>