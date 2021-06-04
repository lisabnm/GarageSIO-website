<?php 
class marque extends Model {
	var $table="marque";
	
	function getLast($num=99) {
		return $this->find(array(
			"limit"=> 'LIMIT '.$num
		));
	}
	
	function getMar($id) {
		return $this->findfirst(array(
			"condition"=> 'id='.$id
		));
	}

	function deleteMar($id){
		$this->id=$id;
		return $this->delete();
	}
}
?>