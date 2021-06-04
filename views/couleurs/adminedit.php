<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Couleurs</h1>
		</div>
	</div>
<?php
	// echo "<PRE>";
	// print_r($cat); 
	// echo "</PRE>";
?>
	<div class="row">
		<div class="col-md-5">
			<form method="POST" action="/<?=WEBROOT2?>/couleurs/adminedit">
			  <div class="form-group">
				<label for="exampleInputid1">id</label>
				<input type="id" name="id" class="form-control" id="exampleInputid1" readonly="readonly" 
				value="<?php if(isset($coul->id)) echo $coul->id; ?>">
			  </div>
			  <div class="form-group">
				<label for="exampleInputname1">Nom ccouleur :</label>
				<input type="name" name="name" class="form-control" id="exampleInputname1" aria-describedby="nameHelp" 
				placeholder="Entrez le nom"	value="<?php if(isset($coul->name)) echo $coul->name; ?>">
				<small id="nameHelp" class="form-text text-muted">Saisissez le nom de la couleur.</small>
			  </div>
			  <!-- <div class="form-group"> -->
			  	<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				    Metal
				  <?php if(isset($coul->metal)) echo $coul->metal; ?>
				  </label>
				</div>
				<!-- <label for="exampleInputordre1">Metal</label>
				<input type="Metal" name="metal" class="form-control" id="exampleInputordre1" 
				placeholder="" value="<?php if(isset($cat->metal)) echo $cat->metal; ?>">
			  </div> -->
			  <button type="submit" class="btn btn-primary">Valider</button>
			</form>
		</div>
	</div>
</div>