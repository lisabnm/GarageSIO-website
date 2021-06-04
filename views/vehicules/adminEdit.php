<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Vehicules</h1>
		</div>
	</div>
<?php
	// echo "<PRE>";
	// print_r($veh); 
	// echo "</PRE>";
?>
	<form method="POST" action="/<?=WEBROOT2?>/vehicules/adminedit" enctype="multipart/form-data">
	<div class="row">
		<div class="col-sm">
			  <div class="form-group">
				<label for="exampleInputid1">id</label>
				<input type="id" name="id" class="form-control" id="exampleInputid1" readonly="readonly" 
				value="<?php if(isset($veh->id)) echo $veh->id; ?>">
			  </div>
			  <div class="form-group">
				<label for="exampleInputname1">Nom vehicule :</label>
				<input type="text" name="name" class="form-control" id="exampleInputname1" aria-describedby="nameHelp" 
				placeholder="Entrez le nom"	value="<?php if(isset($veh->name)) echo $veh->name; ?>">
				<small id="nameHelp" class="form-text text-muted">Saisissez le nom du véhicule.</small>
			  </div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Détail vehicule :</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="detail">
						<?php if(isset($veh->detail)) echo $veh->detail; ?>
					</textarea>
				</div>			  
			  <div class="form-group">
				<label for="exampleInputname1">Immatriculation vehicule :</label>
				<input type="text" name="immat" class="form-control" id="exampleInputname1" aria-describedby="immatHelp" 
				placeholder="Entrez l'immatriculation du véhicule"	value="<?php if(isset($veh->immat)) echo $veh->immat; ?>">
				<small id="immatHelp" class="form-text text-muted">Saisissez l'immat du véhicule.</small>
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlSelect1">Categorie : </label>
				<select name="categorie" class="form-control" id="exampleFormControlSelect1">
				  <?php
				  foreach ($cats as $cat){
					  if (isset($veh->categorie)) {
						  if ($cat->id==$veh->categorie)
						  {
							echo "<option value='".$cat->id."' selected>".$cat->name."</option>";
						  }
						  else
						  {
							  echo "<option value='".$cat->id."'>".$cat->name."</option>";
						  }
					  }
					  else
					  {
						  echo "<option value='".$cat->id."'>".$cat->name."</option>";
					  }
				  }
				?>
				</select>
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlSelect2">Marque : </label>
				<select name="marque" class="form-control" id="exampleFormControlSelect2">
				  <?php
				  foreach ($mars as $mar){
					  if (isset($veh->marque)) {
						  if ($mar->id==$veh->marque)
						  {
							echo "<option value='".$mar->id."' selected>".$mar->libelle."</option>";
						  }
						  else
						  {
							  echo "<option value='".$mar->id."'>".$mar->libelle."</option>";
						  }
					  }
					  else
					  {
						  echo "<option value='".$mar->id."'>".$mar->libelle."</option>";
					  }
				  }
				?>
				</select>
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlSelect3">Couleur : </label>
				<select name="couleur" class="form-control" id="exampleFormControlSelect3">
				  <?php
				  foreach ($couls as $coul){
					  if (isset($veh->couleur)) {
						  if ($coul->id==$veh->couleur)
						  {
							echo "<option value='".$coul->id."' selected>".$coul->libcouleur."</option>";
						  }
						  else
						  {
							  echo "<option value='".$coul->id."'>".$coul->libcouleur."</option>";
						  }
					  }
					  else
					  {
						  echo "<option value='".$coul->id."'>".$coul->libcouleur."</option>";
					  }
				  }
				?>
				</select>
			  </div>
		</div>
		<div class="col-sm">
			<?php if(isset($veh->image)) echo '<img src="/'.WEBROOT2.'/webroot/img/'.$veh->image.'" width="400" />'; ?>
			  <div class="custom-file">
				  <input type="file" name="fichier" class="custom-file-input" id="customFile">
				  <label class="custom-file-label" for="customFile">Choose file</label>
			  </div>
			
			<div class="form-group">
				<label for="exampleInputprix1">Prix</label>
				<input type="prix" name="prix" class="form-control" id="exampleInputprix1" 
				placeholder="Entrer le prix" value="<?php if(isset($veh->prix)) echo $veh->prix; ?>">
			</div>
			<button type="submit" class="btn btn-primary">Valider</button>
		</div>
	</div>
	</form>
</div>