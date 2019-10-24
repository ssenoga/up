<table class="table table-bordered">
	<thead>
		<tr>
			<th>Id</th>
			<th>Number Plate</th>
			<th>Chasis Number</th>
			<th>Amount</th>
			<th>Payment Date</th>
			<th>Issued Date</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$sql = $con->query("SELECT * FROM tickets WHERE chasis = '$chasis'");

			$count = $sql->num_rows;
			if($count > 0){
				while($rows = $sql->fetch_object()){
					$id = $rows->t_id;
					$Nplate = $rows->Nplate;
					$Pdate = $rows->due_date;
					$Idate = $rows->issue_date;
					$amount = $rows->pay_amount;
					$chasisN = $rows->chasis;
					?>
					<tr>
						<td><?php echo $id; ?></td>
						<td><?php echo $Nplate; ?></td>
						<td><?php echo $chasisN; ?></td>
						<td><?php echo $amount; ?></td>
						<td><?php echo $Pdate; ?></td>
						<td><?php echo $Idate; ?></td>
					</tr>
					<?php
				}
			}else {
				echo "<h3 class='h3 text-center'>No Records Yet</h3>";
			}
		?>
	</tbody>
</table>
