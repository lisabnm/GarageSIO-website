<?php 
class couleur extends Model {
	var $table="couleur";
	
	function getLast($num=99) {
		return $this->find(array(
			"limit"=> 'LIMIT '.$num
		));
	}
	
	function getCoul($id) {
		return $this->findfirst(array(
			"condition"=> 'id='.$id
		));
	}

	function deleteCoul($id){
		$this->id=$id;
		return $this->delete();
	}
}
?>