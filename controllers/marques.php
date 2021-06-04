<?php 
class marques extends controller {
	
	var $models = array("marque");

	function index() {
		//echo 'function index';
		$d=array();
		// $d['cat']= array(
			// "nom" => "Berline",
			// "ordre" => 1
		// );
		//$this->category = $this->loadModel('category');
		$d['mars']= $this->marque->getLast();
		$d['titre']= "Liste des 6 dernières marques";
		
		$this->set($d);
		
		//je rend la vue index
		$this->render('index');
	}
	
	
	function view($id) {
		//$this->category = $this->loadModel('category');
		$d['mar']= $this->marque->getMar($id);
		$d['titre']= "Détail catégorie";
		
		$this->set($d);
		
		//je rend la vue view
		$this->render('view');
		
	}
	function adminIndex() {
		
		if ($this->Session->isLogged()){
			
			$d['mars'] =$this->marque->getLast(999);
			$d['titre'] ="Administration marques";
			
			
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
				$this->marque->save($_POST);
				$this->Session->setFlash("Votre mise à jour a bien été prise en compte");
				$d['mars']=$this->marque->getLast();
				$d['titre'] ="Administration marques";
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
					$d['mar'] =$this->marque->getMar($id);
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
			
			if (!$this->marque->deleteMar($id)) {
				$this->Session->setFlash("Suppression impossible! il y a des vehicules dans cette marque","danger");
			} else {
				$this->Session->setFlash("Suppression effectuée","success");
			}
			$d['mars'] =$this->marque->getLast(999);
			$d['titre'] ="Administration marques";
			
			
			$this->set($d);
			
			$this->layout='admin';
			//on rend la vue --> index
			$this->render('adminIndex');
		}
	}

	
}
?>