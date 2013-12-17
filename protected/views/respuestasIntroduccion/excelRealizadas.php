<?php if (!empty($model)): ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php 
	$labels=ViewRespuesta2::model()->attributeLabels();
	?>
	<table border="1">
		<thead>
			<tr>
				<th><?php echo $labels['id_con']; ?></th>
				<th><?php echo $labels['nom_contacto']; ?></th>
				<th><?php echo $labels['email']; ?></th>
				<th><?php echo $labels['f1']; ?></th>
				<th><?php echo $labels['f2']; ?></th>
				<th><?php echo $labels['f3']; ?></th>
				<th><?php echo $labels['f4']; ?></th>
				<th><?php echo $labels['f5']; ?></th>
				<th><?php echo $labels['f6']; ?></th>
				<th><?php echo $labels['paraHacer']; ?></th>
				<th><?php echo $labels['tsinterminar']; ?></th>
				<th><?php echo $labels['tterminados']; ?></th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$i=0;
			foreach ($model as $m) {
				$style = ($i%2==0) ? ' style="background-color:#CCC;" ' : '' ;
				echo "<tr ".$style.">";
				echo "<td class='id_con'>".$m->id_con."</td>";
				echo "<td class='nom_contacto'>".$m->nom_contacto."</td>";
				echo "<td class='email'>".$m->email."</td>";
				echo "<td class='f1'>".$m->f1."</td>";
				echo "<td class='f2'>".$m->f2."</td>";
				echo "<td class='f3'>".$m->f3."</td>";
				echo "<td class='f4'>".$m->f4."</td>";
				echo "<td class='f5'>".$m->f5."</td>";
				echo "<td class='f6'>".$m->f6."</td>";
				echo "<td class='paraHacer'>".$m->paraHacer."</td>";
				echo "<td class='tsinterminar'>".$m->tsinterminar."</td>";
				echo "<td class='tterminados'>".$m->tterminados."</td>";
				echo "</tr>";
				$i++;
			} ?>
		</tbody>
	</table>
	<?php endif ?>