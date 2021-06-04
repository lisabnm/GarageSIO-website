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
      <th scope="col">Nom marque</th>
      <th scope="col">Ordre</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
	<?php 
	foreach ($mars as $m){
		echo "<tr>";
		echo '  <th scope="row">'.$m->id.'</th>';
		echo '  <td><a href="/'.WEBROOT2.'/marques/view/'.$m->id.'">'.$m->libelle.'</a></td>';
		echo '<td><img src="/'.WEBROOT2.'/webroot/img/'.$m->logo.'" width="70px"></td>';
		echo '  <td></td>';
		echo '</tr>';
	}
	?>
  </tbody>
</table>