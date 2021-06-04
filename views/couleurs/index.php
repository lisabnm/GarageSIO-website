<h1><?=$titre?></h1>
<?php 
	//je rend la vue index
	// echo "<PRE>";
	// print_r($cats); 
	// echo "</PRE>";	
?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom couleur</th>
      <th scope="col">Metal</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
	<?php 
	foreach ($couls as $c){
		echo "<tr>";
		echo '  <th scope="row">'.$c->id.'</th>';
		echo '  <td><a href="/'.WEBROOT2.'/couleurs/view/'.$c->id.'">'.$c->libcouleur.'</a></td>';
		echo '  <td>'.$c->metal.'</td>';
		echo '  <td></td>';
		echo '</tr>';
	}
	?>
  </tbody>
</table>