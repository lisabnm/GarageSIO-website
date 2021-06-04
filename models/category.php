<?php 
//category hérite de Model
class category extends Model {
	var $table="categorie";
	
	function getLast($num=99) {
		return $this->find(array(
			"order"=> 'ordre ASC',
			"limit"=> 'LIMIT '.$num
		));
	}
	
	function getCat($id) {
		return $this->findfirst(array(
			"condition"=> 'id='.$id
		));
	}

	function deleteCat($id){
		$this->id=$id;
		return $this->delete();
	}
}
?>