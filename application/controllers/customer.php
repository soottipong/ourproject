<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	function __construct() {
	parent::__construct();

	$this->load->model('customer_model');
	$this->load->database();
	

}

function index(){

	$result=$this->customer_model->display_records();
	$data['display']=$result;
	$this->load->view('_customer/customer_table',$data);
	



}


public function insert(){

	$this->load->library('form_validation');

    $this->form_validation->set_rules("customer_name","customer name",'required');
    $this->form_validation->set_rules("customer_email","customer email",'required');
    $this->form_validation->set_rules("customer_phone","customer phone",'required');
    $this->form_validation->set_rules("created_at","Created at",'required');
    $this->form_validation->set_rules("updated_at","updated at",'required');
    $this->form_validation->set_rules("customer_status","status",'required');
        
 if ($this->form_validation->run()==TRUE) {

   if($this->input->post('save')){	

    $data=array(
		'customer_name'=>$this->input->post('customer_name'),
		'customer_phone'=>$this->input->post('customer_phone'),
		'customer_email'=>$this->input->post('customer_email'),
		'customer_address'=>$this->input->post('customer_address'),
		'customer_status'=>$this->input->post('customer_status'),
		'created_at'=>date('Y-m-d H:i:s'),
		'updated_at'=>date('Y-m-d H:i:s')
    );


    $this->customer_model->savedata($data);
    $result=$this->customer_model->display_records();
    $data['display']=$result;
     $this->session->set_flashdata('success',array('message'=>'created successfully'));
    redirect('customer/display');

   }

    		
    }else{

        $this->load->view('_customer/Customer_insert');
   
   }

	    }

public function display()

  {

	$result=$this->customer_model->display_records();
	$data['display']=$result;
	$this->load->view('_customer/customer_table',$data);
	
}

public function edit($id)
	{
	
	 $result['da1']=$this->customer_model->editdata($id);
	$this->load->view('_customer/edit_customer',$result);
	if($this->input->post('update')){

		$data=array(
	
		'customer_name'=>$this->input->post('customer_name'),
		'customer_phone'=>$this->input->post('customer_phone'),
		'customer_email'=>$this->input->post('customer_email'),
		'customer_status'=>$this->input->post('customer_status'),
		//'created_at'=>date('Y-m-d H:i:s'),
		'updated_at'=>date('Y-m-d H:i:s')
 
		);


	
    	$this->customer_model->updata($id,$data);
    	 $this->session->set_flashdata('success',array('message'=>'Updated successfully'));
    		redirect("Customer/display");
    	
			
}

}
//public function edit($id)
	
	//{			
			
   ///     $data['da1'] = $this->customer_model->editdata($id);
    //    $this->load->view('_customer/edit_customer',$data);
           //  redirect("customer/edit_customer");
	//}

public function deletedata($id)
	
	{
	//$id = $this->uri->segment(3);	
	//$id=$this->input->get('id',$id);
		$this->customer_model->deleterecords($id);
		$this->session->set_flashdata('success',array('message'=>'Deleted successfully'));
		redirect("customer/display");
	}

public function search_keyword($keyword)
   
   {
       $this->customer_model->searchdata($keyword);
       $data=$this->input->post('customer_name');
        echo json_encode( $data);
      // $this->load->view('_customer/Customer/display', $cus);


   }


   public function detail($id)
	{
	
	 $result['da1']=$this->customer_model->editdata($id);
	$this->load->view('_customer/customer_detail',$result);
	if($this->input->post('update')){

		$data=array(

		'id'=>$this->input->post('id'),
		'customer_name'=>$this->input->post('customer_name'),
		'customer_phone'=>$this->input->post('customer_phone'),
		'customer_email'=>$this->input->post('customer_email'),
		'customer_status'=>$this->input->post('customer_status'),
		'created_at'=>date_forma('Y-m-d H:i:s'),
		'updated_at'=>date_format('Y-m-d H:i:s')
 
		);


	
    	$this->customer_model->updata($id,$data);
    	// $this->session->set_flashdata('success',array('message'=>'Updated successfully'));
    		//redirect("Customer/display");
    	
	
}

}
//public function edit($id)

}

