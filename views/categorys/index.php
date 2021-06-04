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
      <th scope="col">Nom catégorie</th>
      <th scope="col">Ordre</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
	<?php 
	foreach ($cats as $c){
		echo "<tr>";
		echo '  <th scope="row">'.$c->id.'</th>';
		echo '  <td><a href="/'.WEBROOT2.'/categorys/view/'.$c->id.'">'.$c->name.'</a></td>';
		echo '  <td>'.$c->ordre.'</td>';
		echo '  <td></td>';
		echo '</tr>';
	}
	?>
  </tbody>
</table>