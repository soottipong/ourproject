<?php 
   class Project_Model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
      public function getData(){
         $this->db->select('projects.*,customers.id as cid, sales.id as sid, sales.sale_name, count(borelogs.borelog_ref_pid) as BTotal');    
         $this->db->from('projects');
         $this->db->join('customers', 'projects.project_ref_cid = customers.id');
         $this->db->join('sales','projects.project_ref_sid=sales.id ');
         $this->db->join('borelogs','projects.id = borelogs.borelog_ref_pid','left');
         $this->db->order_by("projects.id", "desc");
         $this->db->group_by('projects.id');
         $query = $this->db->get(); 
         return $query->result();

      }
	  public function selectOne($id){
         
         $this->db->where('projects.id',$id);
         $this->db->select('projects.*,sales.sale_name,customers.customer_name');
         $this->db->from('projects');
         $this->db->join('sales','projects.project_ref_sid = sales.id');
         $this->db->join('customers','projects.project_ref_cid = customers.id');

         $query = $this->db->get();
         return $query->row();
	  }
     public function selectBorelog($id){
         $this->db->where('projects.id',$id);
         $this->db->order_by('borelogs.id','desc');
         $this->db->select('projects.*,sales.sale_name,customers.customer_name,borelogs.borelog_ref_pid,borelogs.created_at as borelog_date, borelogs.id as bid');
         $this->db->from('projects');
         $this->db->join('sales','projects.project_ref_sid = sales.id');
         $this->db->join('customers','projects.project_ref_cid = customers.id');
         $this->db->join('borelogs','projects.id = borelogs.borelog_ref_pid');

         $query = $this->db->get(); 
         return $query->result();
     }
      public function insert($id = '') { 
         date_default_timezone_set('Asia/Bangkok'); # add your city to set local time zone         
         $data = array( 
                'project_CODE'      => $this->input->post('project_code'), 
                'project_ref_cid'   => $this->input->post('project_customer'),
                'project_ref_sid'   => $this->input->post('project_sale'),
                'project_diameters' => $this->input->post('project_meters'),
                'project_start'     => $this->input->post('project_date'),
                'project_end'       => $this->input->post('project_end'),
                'project_name'      => $this->input->post('project_name'),
                'project_location'  => $this->input->post('project_location'),
                'project_totalpile' => $this->input->post('project_pile'),
                'project_depth'     => $this->input->post('project_depth'),
                'project_status'    => $this->input->post('project_status'),
                'project_remark'    => $this->input->post('project_remark')
             ); 
         if($id == NULL)
         {
            $data['project_added'] = $this->session->userdata('userId');
            $data['created_at'] = date('Y-m-d H:i:s');
            $this->db->insert('projects', $data);

            $project_id = $this->db->insert_id();
            if($project_id == TRUE){
               $data_a = array(
                  'assign_to'    => $this->input->post('assign_to'),
                  'assign_from'  => $this->session->userdata('userId'),
                  'assign_pid'   => $project_id,
                  'assign_date'  => date('Y-m-d H:i:s')
               );
               $this->db->insert('assigned', $data_a);
            }
         }
         else
         {
            $data['project_updated'] = $this->session->userdata('userId');
            $data['updated_at']      = date('Y-m-d H:i:s');
            $this->db->update('projects', $data, array('id'=> $id));
         }
      } 
   
      public function delete($id) { 
         if ($this->db->delete("projects", "id = ".$id)) { 
            return true; 
         } 
      } 
   
      public function update($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("projects", $data); 
      } 
      public function setlockProject($id) {
         $this->db->set('project_status','Completed');
         $this->db->where('id', $id);
         $this->db->update('projects');
      }
      // Assigne to
      public function getAssign($id) {
         $this->db->select('assigned.*,users.id as uid, users.name');
         $this->db->from('assigned');
         $this->db->join('users','assigned.assign_to = users.id');
         $this->db->where('assigned.assign_pid', $id);
         $query = $this->db->get();
         return $query->row();
      }
   } 
?>