<?php 
/**
 * 
 */
class queryModel extends CI_Model
{
	//Default Method
	public function defaultQuery($tb,$data){
		$this->db->select($data);
		return $this->db->get($tb);
	}
	public function query_one_cond($tb,$data,$field,$id){
		$this->db->select($data)->where($field,$id);
		return $this->db->get($tb);
	}
	public function query_join_table($data,$tb,$j_tb,$j_cond){
		$this->db->select($data);
		$this->db->from($tb);
		$this->db->join($j_tb,$j_cond);
		return $this->db->get();
	}
	public function query_join_table_cond($data,$tb,$j_tb,$j_cond,$w_field,$id){
		$this->db->select($data);
		$this->db->from($tb);
		$this->db->join($j_tb,$j_cond);
		$this->db->where($w_field,$id);
		return $this->db->get();
	}

	//Read Query Controller
	public function check_login($email,$pass){
		$this->db->select('us_email,us_pass,us_rule');
		$this->db->where('us_email',$email);
		$this->db->where('us_pass',$pass);
		return $this->db->get('tb_user');
	}

	//Query Quote join tree table
	public function query_quote_info(){
		$this->db->select('quote_id,quote_status,quote_num,quote_cre_date,quote_amount,cus_name,us_fname,us_lname');
		$this->db->from('tb_quote');
		$this->db->join('tb_user','tb_quote.quote_by=tb_user.us_id');
		$this->db->join('tb_customer','tb_quote.quote_cus=tb_customer.cus_id');
		return $this->db->get();
	}

}









?>