<?php 
   class Customer_Model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
	  
	  public function getData(){
        $query = $this->db->get('customers');
        return $query->result();
	  }
   
      public function insert($data) { 
         if ($this->db->insert("customers", $data)) { 
            return true; 
         } 
      } 
   
      public function delete($id) { 
         if ($this->db->delete("customers", "id = ".$id)) { 
            return true; 
         } 
      } 
   
      public function update($data,$id) { 
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("customers", $data); 
      } 
   } 
?>