<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {
    public function __construct()
    {
            parent::__construct();

            //load library
            $this->load->library('zend');
            //load model
            $this->load->model(array('Engineer_Model','Forman_Model','Sale_Model','Customer_Model','Project_Model','user','Borelog_Model'));
         
        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 

    }  
    public function index()
    {
        if($this->isUserLoggedIn){
            
            $con = array(
                'id' => $this->session->userdata('userId')
            );
            $data = array(
                'title' => 'views'
            );
            $data['user']   = $this->user->getRows($con);
            $data['result'] = $this->Project_Model->getData();
            $this->load->view('project/index', $data);
        }else{
            redirect('user');
        }
    }

    public function form()
    {
        if($this->isUserLoggedIn){ 
            $con = array( 
                'id' => $this->session->userdata('userId') 
            ); 
            
            $data = array(
                'title' => "Create Project"
            );
            $data['result']     = $this->Engineer_Model->getData();
            $data['forman']     = $this->Forman_Model->getData();
            $data['sale']       = $this->Sale_Model->getData();
            $data['customer']   = $this->Customer_Model->getData();
            $data['user']       = $this->user->getRows($con);  
            $data['users']      = $this->user->getData();
            $this->load->view('project/form', $data);
        }else{
            //
            redirect('users/login'); 
        }
    }
    public function store(){
        if($this->input->server('REQUEST_METHOD') == TRUE)
		{
            $this->Project_Model->insert($this->input->post('id'));
            redirect('projects');
        }
    }
    public function views($id)
    {
        if($this->isUserLoggedIn){
            
            $con = array(
                'id' => $this->session->userdata('userId')
            );
            $data = array(
                'title' => 'views'
            );
            $data['user']   = $this->user->getRows($con);
            $data['result'] = $this->Project_Model->selectOne($id);
            $data['bore']   = $this->Project_Model->selectBorelog($id);
            
            if(!empty($id)){
                $this->load->view('project/views', $data);
            }else{
                redirect('projects');
            }
        }
    }
    public function addbore($id)
    {
        if($this->isUserLoggedIn){
            
            $con = array(
                'id' => $this->session->userdata('userId')
            );
            $data = array(
                'title' => 'views'
            );
            $data['user']       = $this->user->getRows($con);
            $data['result']     = $this->Project_Model->selectOne($id);
            $data['forman']     = $this->Forman_Model->getData();
            
            $this->load->view('project/addbore', $data);
        }
    }
    public function saveborelog()
    {
        date_default_timezone_set('Asia/Bangkok'); // defualt time asia
        $now_date = date('Y-m-d H:i:s');
        $data = array(
            'borelog_rigno'             => $this->input->post('borelog_rigno'),
            'borelog_pileno'            => $this->input->post('borelog_pileno'),
            'borelog_pilegroup'         => $this->input->post('borelog_pilegroup'),
            'borelog_no'                => $this->input->post('borelog_no'),
            'borelog_weather'           => $this->input->post('borelog_weather'),
            'borelog_casing_date'       => $this->input->post('borelog_casing_date'),
            'borelog_casing_start'      => $this->input->post('borelog_casing_start'),
            'borelog_casing_finish'     => $this->input->post('borelog_casing_finish'),
            'borelog_boring_date'       => $this->input->post('borelog_boring_date'),
            'borelog_boring_start'      => $this->input->post('borelog_boring_start'),
            'borelog_boring_finish'     => $this->input->post('borelog_boring_finish'),
            'borelog_steel_sonic_pipes_date'    => $this->input->post('borelog_steel_sonic_pipes_date'),
            'borelog_steel_sonic_pipes_start'   => $this->input->post('borelog_steel_sonic_pipes_start'),
            'borelog_steel_sonic_pipes_finish'  => $this->input->post('borelog_steel_sonic_pipes_finish'),
            'borelog_concrete_date'         => $this->input->post('borelog_concrete_date'),
            'borelog_concrete_start'        => $this->input->post('borelog_concrete_start'),
            'borelog_concrete_finish'       => $this->input->post('borelog_concrete_finish'),
            'borelog_e_ground_level'        => $this->input->post('borelog_e_ground_level'),
            'borelog_toc_casing_level'      => $this->input->post('borelog_toc_casing_level'),
            'borelog_leng_casing'           => $this->input->post('borelog_leng_casing'),
            'borelog_cut_off_level_design'  => $this->input->post('borelog_cut_off_level_design'),
            'borelog_design_depth'          => $this->input->post('borelog_design_depth'),
            'borelog_depth_casing_level'    => $this->input->post('borelog_depth_casing_level'),
            'borelog_depth_egl'             => $this->input->post('borelog_depth_egl'),
            'borelog_depth_soil_ba'         => $this->input->post('borelog_depth_soil_ba'),
            'borelog_rock_length'           => $this->input->post('borelog_rock_length'),
            'borelog_concrete_method'       => $this->input->post('borelog_concrete_method'),
            'borelog_concrete_vt'           => $this->input->post('borelog_concrete_vt'),
            'borelog_concrete_va'           => $this->input->post('borelog_concrete_va'),
            'borelog_concrete_grade_text'   => $this->input->post('borelog_concrete_grade_text'),
            'borelog_concrete_grade'        => $this->input->post('borelog_concrete_grade'),
            'borelog_concrete_slump'        => $this->input->post('borelog_concrete_slump'),
            'borelog_main_bar_a'            => $this->input->post('borelog_main_bar_a'),
            'borelog_main_bar_b'            => $this->input->post('borelog_main_bar_b'),
            'borelog_stiffener'             => $this->input->post('borelog_stiffener'),
            'borelog_spiral_link'           => $this->input->post('borelog_spiral_link'),
            'borelog_top_lapping'           => $this->input->post('borelog_top_lapping'),
            'borelog_below_lapping'         => $this->input->post('borelog_below_lapping'),
            'borelog_b_density_fresh'       => $this->input->post('borelog_b_density_fresh'),
            'borelog_b_density_after'       => $this->input->post('borelog_b_density_after'),
            'borelog_b_viscosity_fresh'     => $this->input->post('borelog_b_viscosity_fresh'),
            'borelog_b_viscosity_after'     => $this->input->post('borelog_b_viscosity_after'),
            'borelog_b_ph_fresh'            => $this->input->post('borelog_b_ph_fresh'),
            'borelog_b_ph_after'            => $this->input->post('borelog_b_ph_after'),
            'borelog_b_san_fresh'           => $this->input->post('borelog_b_san_fresh'),
            'borelog_b_san_after'           => $this->input->post('borelog_b_san_after'),
            'borelog_sonic_top_level'       => $this->input->post('borelog_sonic_top_level'),
            'borelog_sonic_length'          => $this->input->post('borelog_sonic_length'),
            'borelog_sonic_type'            => $this->input->post('borelog_sonic_type'),
            'borelog_sonic_diameter'        => $this->input->post('borelog_sonic_diameter'),
            'borelog_sonic_remark'          => $this->input->post('borelog_sonic_remark'),
            'borelog_s_co_x_before'         => $this->input->post('borelog_s_co_x_before'),
            'borelog_s_co_x_after'          => $this->input->post('borelog_s_co_x_after'),
            'borelog_s_co_x_errors'         => $this->input->post('borelog_s_co_x_errors'),
            'borelog_s_co_y_before'         => $this->input->post('borelog_s_co_y_before'),
            'borelog_s_co_y_after'          => $this->input->post('borelog_s_co_y_after'),
            'borelog_s_co_y_errors'         => $this->input->post('borelog_s_co_y_errors'),
            'borelog_s_co_y_err_xy_x'       => $this->input->post('borelog_s_co_y_err_xy_x'),
            'borelog_s_co_y_err_xy_y'       => $this->input->post('borelog_s_co_y_err_xy_y'),
            'borelog_diameters'             => $this->input->post('borelog_pile_diameter'),
            'borelog_ref_pid'               => $this->input->post('borelog_ref_pid'),
            'borelog_ref_fid'               => $this->input->post('borelog_ref_fid'),
            'borelog_operator_name'         => $this->input->post('operator_name'),
            'borelog_added'                 => $this->session->userdata('isUserLoggedIn'),
            'created_at'                    => $now_date
        );
        $this->Borelog_Model->insert($data);
        $borelog_id = $this->db->insert_id();
        
        $count_soil  = count($this->input->post('soil_meters'));
        $count_truck = count($this->input->post('truck_no'));
        
        if($count_truck == TRUE) {   
            for($i= 0; $i < $count_truck; $i++) { 
                    $value_b = array(
                        'trucks_borelog_ref_id' => $borelog_id,
                        'truck_no'              => $this->input->post('truck_no')[$i],
                        'truck_delivery_no'     => $this->input->post('truck_delivery_no')[$i],
                        'truck_time_bp'         => $this->input->post('truck_time_bp')[$i],
                        'truck_time_on_site'    => $this->input->post('truck_time_on_site')[$i],
                        'truck_start_pt'        => $this->input->post('truck_start_pt')[$i],
                        'truck_finish_pt'       => $this->input->post('truck_finish_pt')[$i],
                        'truck_slump'           => $this->input->post('truck_slump')[$i],
                        'truck_volume'          => $this->input->post('truck_volume')[$i],
                        'truck_aq'              => $this->input->post('truck_aq')[$i],
                        'truck_hct'             => $this->input->post('truck_hct')[$i],
                        'truck_tlc'             => $this->input->post('truck_tlc')[$i],
                        'truck_tbt'             => $this->input->post('truck_tbt')[$i],
                        'truck_tlic'            => $this->input->post('truck_tlic')[$i],
                        'truck_remark'          => $this->input->post('truck_remark')[$i],
                        'created_at'            => $now_date
                    );
                $this->Borelog_Model->InsertTruck($value_b);
            }
        }
        if($count_soil == TRUE) {
            for($x = 0; $x < $count_soil; $x++){
                $value_s = array(
                    'borelog_ref_id'       => $borelog_id,
                    'soil_meters'          => $this->input->post('soil_meters')[$x],
                    'soil_remark'          => $this->input->post('soil_remark')[$x],
                    'created_at'           => $now_date
                );
                $this->Borelog_Model->InsertSoil($value_s);
            }
        }
        redirect('borelogsViwes/'.$borelog_id);
    }
    public function viewborelogs($id){
        if($this->isUserLoggedIn){

            $con = array(
                'id'    => $this->session->userdata('userId')
            );

            $data = array(
                'title' => "Borelog View"
            );
            $data['user']   = $this->user->getRows($con);  
            $data['bore']   = $this->Borelog_Model->read_borelog($id);
            $data['soils']  = $this->Borelog_Model->selectSoil($id);
            $data['trucks'] = $this->Borelog_Model->selectTruck($id);

            $this->load->view('project/viewsborelogs',$data);
        }else{
            redirect('user');
        }
    }
    public function printborelogs($id){
        
        if($this->isUserLoggedIn){

            $con = array(
                'id'    => $this->session->userdata('userId')
            );

            $data = array(
                'title' => "Borelog View"
            );
            $data['user']   = $this->user->getRows($con);  
            $data['bore']   = $this->Borelog_Model->read_borelog($id);
            $data['soils']  = $this->Borelog_Model->selectSoil($id);
            $data['trucks'] = $this->Borelog_Model->selectTruck($id);
        
            $this->load->view('project/borelogprint',$data);
        }else{
            redirect('user');
        }
    }
    public function edit(){
        if($this->isUserLoggedIn){ 
            $id  = $this->uri->segment('3'); 
            $con = array( 
                'id'            => $this->session->userdata('userId') 
            ); 
            $data = array(
                'title'         => "Create Project"
            );
            $data['user']       = $this->user->getRows($con);  
            $data['engineer']   = $this->Engineer_Model->getData();
            $data['forman']     = $this->Forman_Model->getData();
            $data['sale']       = $this->Sale_Model->getData();
            $data['customer']   = $this->Customer_Model->getData();
            $data['result']     = $this->Project_Model->selectOne($id);
            $data['users']      = $this->user->getData();
            $data['Assign']     = $this->Project_Model->getAssign($id);
        
            $this->load->view('project/edit',$data);
        }else{
            redirect('user');
        }   
   }
   function generate($code)
    {
        // we load zend barcode
        $this->zend->load('Zend/Barcode');
        Zend_Barcode::render('Code128', 'image', array('barHeight' => 30,'text' => $code), array());
 
        // we can save it with image
        //$test = Zend_Barcode::draw('code128', 'image', array('text' => '1234565'), array());
        //var_dump($test);
        //imagejpeg($test, 'barcode.jpg', 100);
 
    }
    public function confrm($id)
	{
		$data = array
		(
			'backlink'  => 'projects',
			'locklink'  => 'projects/setlock/' . $id
		);
		//$this->load->view('template/backheader');
		$this->load->view('confrm',$data);
		//$this->load->view('template/backfooter');
	}
	public function setlock($id)
	{
		$this->Project_Model->setlockProject($id);
		redirect('projects','refresh');
	}
}