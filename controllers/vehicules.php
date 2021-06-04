<?php 
class vehicules extends controller {
	
	var $models = array("category","vehicule","marque","couleur");

	function index() {
		
		//echo "méthode index de la classe category";
		$d=array();
		// $d['cat'] = array (
			// "nom"=>"berline",
			// "ordre"=>"4"
		// );
		
		$d['vehs'] =$this->vehicule->getAll();
		$d['titre'] ="Liste des véhicules";
		
		
		$this->set($d);
		
		//on rend la vue --> index
		$this->render('index');
	}

	function view($id) {
		//echo "id vehicule".$id;
		
		$d['veh'] =$this->vehicule->getDetail($id);
		$d['titre'] ="Détail du véhicule n°".$id;
		
		$this->set($d);
		
		$this->render('view');		
		
	}
	
	function adminIndex() {
		
		if ($this->Session->isLogged()){
			
			$d['vehs'] =$this->vehicule->getAll(999);
			$d['titre'] ="Administration Vehicules";
			
			
			$this->set($d);
			
			$this->layout='admin';
			//on rend la vue --> index
			$this->render('adminIndex');
		}
	}
	
	function adminEdit($id=null) {
		
		if ($this->Session->isLogged()){
			
			$this->layout='admin';
			if(!empty($_POST)) {
				//on est en insert ou update et on affiche la liste
				//print_r($_FILES);
				//si fichier à télécharger renseigné
				if(!empty($_FILES['fichier']['name']))
				{
					//on vérifie les extensions autorisées
					$tabext=array('jpg','png','jpeg');
					$extension=pathinfo($_FILES['fichier']['name'],PATHINFO_EXTENSION);
					if (in_array(strtolower($extension),$tabext))
					{
						if(isset($_FILES['fichier']['error']) && UPLOAD_ERR_OK===$_FILES['fichier']['error'])
						{
							$nomimage=$_POST['name'].'.'.$extension;
							if (empty($_POST['id'])) {
								//on est en ajout
							} else {
								//on est en modif
								$v=$this->vehicule->getImage($_POST['id']);
								unlink('./webroot/img/'.$v->image);
							}
							//on télécharge le fichier avec move_uploaded_file	
							if(move_uploaded_file($_FILES['fichier']['tmp_name'],'./webroot/img/'.$nomimage))
							{
								//on renseigne $_POST image pour le save
								$_POST['image']=$nomimage;
								echo "Upload réussi";
							}
							else{
								echo "Problème lors du téléchargement";
							}
						}
					}
				}
				unset($_POST['fichier']);
				$this->vehicule->save($_POST);
				$this->Session->setFlash("Votre mise à jour a bien été prise en compte");
				$d['vehs']=$this->vehicule->getAll(999);
				$d['titre'] ="Administration des Vehicules";
				$this->set($d);
				//on rend la vue --> adminindex
				$this->render('adminIndex');
			} else {
				$d=array();
				//chargement de nos 3 listes déroulantes
				$d['cats'] =$this->category->getLast(999);
				$d['couls'] =$this->couleur->getLast(999);
				$d['mars'] =$this->marque->getLast(999);
				//on remplit le formualire et on l'affiche
				//si id renseigné
				
				if(!empty($id)) {
					//on remplit form 
					//on récupère les données de mon id
					$d['veh'] =$this->vehicule->getDetail($id);
					$d['titre'] ="Administration des vehicules";
					// echo "<PRE>";
					// print_r($d['veh']); 
					// echo "</PRE>";
				}
				$this->set($d);
				//on rend la vue --> adminedit
				$this->render('adminEdit');
			}
			
		}
	}
	
	function adminDelete($id) {
		
		if ($this->Session->isLogged()){
			
			if (!$this->vehicule->deleteVeh($id)) {
				
			} else {
				$this->Session->setFlash("Suppression effectuée","success");
			}
			$d['vehs'] =$this->vehicule->getAll(999);
			$d['titre'] ="Administration Vehicules";
			
			
			$this->set($d);
			
			$this->layout='admin';
			//on rend la vue --> index
			$this->render('adminIndex');
		}
	}
}
?>