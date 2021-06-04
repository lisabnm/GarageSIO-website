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
      <th scope="col">Nom marque</th>
      <th scope="col">Logo</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
	<?php 
	foreach ($mars as $m){
		echo "<tr>";
		echo '  <th scope="row">'.$m->id.'</th>';
		echo '  <td>'.$m->libelle.'</td>';
		echo '<td><img src="/'.WEBROOT2.'/webroot/img/'.$m->logo.'" width="70px"></td>';
		echo '  <td>';
		echo "<a href='/".WEBROOT2."/marques/adminEdit/".$m->id."'><i class='fas fa-edit'></i></a> ";
		echo "<a href='/".WEBROOT2."/marques/adminDelete/".$m->id."' onclick=\"return confirm('Voulez vous vraiment supprimer cette marque?');\"><i class='fas fa-trash-alt'></i></a>"; 
		echo '</td>';
		echo '</tr>';
	}
	echo "<tr>";
	echo '  <th scope="row"></th>';
	echo '  <td>';
	echo "<a href='/".WEBROOT2."/marques/adminEdit/'><i class='fas fa-plus'></i></a> ";
	echo '</td>';
	echo '  <td>...</td>';
	echo '  <td></td>';
	echo '</tr>';
	
	?>
  </tbody>
</table>