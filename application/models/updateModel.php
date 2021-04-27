<?php 
/**
 * 
 */
class updateModel extends CI_Model
{
	
	public function update_one_cond($tb,$data,$field,$id){
		$this->db->where($field,$id);
		$this->db->update($tb,$data);
		return true;
	}
}









 ?>