<?php 
   class Borelog_Model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
	  
      public function getData(){
         $query = $this->db->get('borelogs');
         return $query->result();
      }

      public function insert($data) { 
         if ($this->db->insert("borelogs", $data)) { 
            return true; 
         } 
      } 
      public function InsertTruck($value_b) {
         if($this->db->insert("trucks", $value_b)) {
            return true;
         }
      }
      public function InsertSoil($value_s) {
         if($this->db->insert("soils", $value_s)) {
            return true;
         }
      }
      public function read_borelog($id)
      { 
         $this->db->select('*');
         $this->db->from('borelogs');
         $this->db->join('formans','borelogs.borelog_ref_fid = formans.id');
         $this->db->join('projects', 'borelogs.borelog_ref_pid = projects.id');
         $this->db->where('borelogs.id', $id);  // Also mention table name here
         $query = $this->db->get();
         return $query->row();
            
      }
      public function selectSoil($id){

         $this->db->select('*');
         $this->db->from('borelogs');
         $this->db->join('soils', 'soils.borelog_ref_id = borelogs.id');
         $this->db->where('soils.borelog_ref_id', $id);  // Also mention table name here

         $query = $this->db->get(); 
         return $query->result();
      }
      public function selectTruck($id){

         $this->db->select('*');
         $this->db->from('borelogs');
         $this->db->join('trucks', 'trucks.trucks_borelog_ref_id = borelogs.id');
         $this->db->where('trucks.trucks_borelog_ref_id', $id);  // Also mention table name here

         $query = $this->db->get(); 
         return $query->result();
      }
      public function delete($id) { 
         if ($this->db->delete("borelogs", "id = ".$id)) { 
            return true; 
         } 
      } 
   
      public function update($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("borelogs", $data); 
      } 
   } 
?>