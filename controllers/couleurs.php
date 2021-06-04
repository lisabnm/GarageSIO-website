<?php 
class couleurs extends controller {
	
	var $models = array("couleur");

	function index() {
		//echo 'function index';
		$d=array();
		// $d['cat']= array(
			// "nom" => "Berline",
			// "ordre" => 1
		// );
		//$this->category = $this->loadModel('category');
		$d['couls']= $this->couleur->getLast();
		$d['titre']= "Liste des dernières couleurs";
		
		$this->set($d);
		
		//je rend la vue index
		$this->render('index');
	}
	
	
	function view($id) {
		//$this->category = $this->loadModel('category');
		$d['coul']= $this->couleurs->getCoul($id);
		$d['titre']= "Détail couleur";
		
		$this->set($d);
		
		//je rend la vue view
		$this->render('view');
		
	}
	function adminIndex() {
		
		if ($this->Session->isLogged()){
			
			$d['couls'] =$this->couleur->getLast(999);
			$d['titre'] ="Administration couleur";
			
			
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
				$this->couleur->save($_POST);
				$this->Session->setFlash("Votre mise à jour a bien été prise en compte");
				$d['couls']=$this->couleur->getLast();
				$d['titre'] ="Administration catégories";
				$this->set($d);
				//on rend la vue --> adminindex
				$this->render('adminIndex');
			} else {
				$d=array();
				//on remplit le formualire et on l'affiche
				//si id renseigné
				if(!empty($id)) {
					//on remplit form 
					//on récupère les données de mon id
					$d['coul'] =$this->couleur->getCoul($id);
					// echo "<PRE>";
					// print_r($d['cat']); 
					// echo "</PRE>";
				}
				$this->set($d);
				//on rend la vue --> adminedit
				$this->render('adminedit');
			}
			
		}
	}
	
	function adminDelete($id) {
		
		if ($this->Session->isLogged()){
			
			if (!$this->couleur->deleteCat($id)) {
				$this->Session->setFlash("Suppression impossible! il y a des vehicules de cette couleur","danger");
			} else {
				$this->Session->setFlash("Suppression effectuée","success");
			}
			$d['couls'] =$this->couleur->getLast(999);
			$d['titre'] ="Administration couleur";
			
			
			$this->set($d);
			
			$this->layout='admin';
			//on rend la vue --> index
			$this->render('adminIndex');
		}
	}

	
}
?>