<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Marque</h1>
		</div>
	</div>
<?php
	// echo "<PRE>";
	// print_r($cat); 
	// echo "</PRE>";
?>
	<div class="row">
		<div class="col-md-5">
			<form method="POST" action="/<?=WEBROOT2?>/marques/adminedit">
			  <div class="form-group">
				<label for="exampleInputid1">id</label>
				<input type="id" name="id" class="form-control" id="exampleInputid1" readonly="readonly" 
				value="<?php if(isset($mar->id)) echo $mar->id; ?>">
			  </div>
			  <div class="form-group">
				<label for="exampleInputname1">Nom Marques :</label>
				<input type="name" name="libelle" class="form-control" id="exampleInputname1" aria-describedby="nameHelp" 
				placeholder="Entrez le nom"	value="<?php if(isset($mar->libelle)) echo $mar->libelle; ?>">
				<small id="nameHelp" class="form-text text-muted">Saisissez le nom de la marque.</small>
			  </div>
			  <div class="form-group">
			  	
				<label for="exampleInputordre1">logo</label>
				<input type="logo" name="logo" class="form-control" id="exampleInputordre1" 
				placeholder="Entrer logo" value="<?php if(isset($mar->logo)) echo $mar->logo; ?>" img width=150 src="/'.WEBROOT2.'/webroot/img/'">
			  </div>
			  <button type="submit" class="btn btn-primary">Valider</button>
			</form>
		</div>
	</div>
</div>