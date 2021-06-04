<?php 
class accueil extends controller {
	var $models = array("caroussel");

function index() {
    //je rend la vue index
        //echo 'function index';
        $d=array();
        // $d['cat']= array(
            // "nom" => "Berline",
            // "ordre" => 1
        // );
        //$this->category = $this->loadModel('category');
        $d['cars']= $this->caroussel->getLast();
        $d['titre']= "Image caroussel";

        $this->set($d);

        //je rend la vue index
        $this->render('index');
}

}

?>
