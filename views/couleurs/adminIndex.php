<h1><?=$titre?></h1>
<?php
	// echo "<PRE>";
	// print_r($cat); 
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
		echo '  <td>'.$c->libcouleur.'</td>';
		echo '  <td>'.$c->metal.'</td>';
		echo '  <td>';
			echo "<a href='/".WEBROOT2."/couleurs/adminEdit/".$c->id."'><i class='fas fa-edit'></i></a> ";
			echo "<a href='/".WEBROOT2."/couleurs/adminDelete/".$c->id."' onclick=\"return confirm('Voulez vous vraiment supprimer cette couleur?');\"><i class='fas fa-trash-alt'></i></a>"; 
		echo '</td>';
		echo '</tr>';
	}
	echo "<tr>";
	echo '  <th scope="row"></th>';
	echo '  <td>';
	echo "<a href='/".WEBROOT2."/couleurs/adminEdit/'><i class='fas fa-plus'></i></a> ";
	echo '</td>';
	echo '  <td>...</td>';
	echo '  <td></td>';
	echo '</tr>';
	
	?>
  </tbody>
</table>