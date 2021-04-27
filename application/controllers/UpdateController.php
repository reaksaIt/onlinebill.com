<?php 
/**
 * 
 */
class UpdateController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('queryModel');
		$this->load->model('insertModel');
		$this->load->model('deleteModel');
		$this->load->model('updateModel');
		$this->load->helper('url');
	}
	public function updateproduct(){
		$id = $this->input->post('edit_id');
		$data = array(
			'pro_name'=>$this->input->post('edit_name'),
			'pro_price'=>$this->input->post('edit_price'),
			'pro_description'=>$this->input->post('edit_des'),
			'pro_cat'=>$this->input->post('edit_cat'),
		);
		$sql = $this->updateModel->update_one_cond('tb_products',$data,'pro_id',$id);
		if($sql ==true){
			$array = array('success'=>true);echo json_encode($array);
		}
	}
	public function updatecustomer($id){
		$data = array(
			'cus_name'=>$this->input->post('edit_name'),
			'cus_phone'=>$this->input->post('edit_phone'),
			'cus_email'=>$this->input->post('edit_email'),
			'cus_address'=>$this->input->post('edit_add'),
		);
		$sql = $this->updateModel->update_one_cond('tb_customer',$data,'cus_id',$id);
		if($sql==true){
			$array = array('updated'=>true);echo json_encode($array);
		}

	}
}
 ?>