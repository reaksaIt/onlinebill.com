<?php 
/**
 * 
 */
class DeleteController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('queryModel');
		$this->load->model('insertModel');
		$this->load->model('deleteModel');
		$this->load->model('updateModel');
		$this->load->helper('url');
		$this->load->library('session');
	}
	public function logout(){
		$remove_session = array('email','rule');
		$this->session->unset_userdata($remove_session);
		redirect(base_url().'index.php/viewcontroller/viewlogin');
	}

	function deleteproduct(){
		$id = $this->input->post('id');
		$data = $this->deleteModel->defaultDelete('tb_products','pro_id',$id);
		if($data==true){
			$array = array('delete'=>true);echo json_encode($array);
		}
		
	}

	public function deletecustomer($id){
		$delete = $this->deleteModel->defaultDelete('tb_customer','cus_id',$id);
	}
	public function deletequote($id){
		$delete=$this->deleteModel->defaultDelete('tb_quote','quote_id',$id);
		if($delete==true){
			$array = array('deleted'=>true);echo json_encode($array);
		}
	}
}
 ?>