
<?php

class customer_model extends CI_Model{

public function _construct(){
	parent:: _construct();

}

function savedata($data)
	{

		$this->db->insert('customers', $data);

	}

function display_records()
	{
		
		$query=$this->db->get('customers');
		return($query->result());
	}

public function updata($id,$data) {

    $this->db->where('id',$id['id']);
    $this->db->update('customers',$data);
	
 	 		
	
    //return;
}

public function editdata($id) {
     $this->db->from('customers');
     $this->db->where('id',$id);
     $query = $this->db->get();
     return $query->row();
 	 		//             $query->result();
 }

public function deleterecords($id)
{
  $this->db->where('id',$id);
  $this->db->delete('customers');
	//return True;
}
  
    public function searchdata ($keyword) 
    {        
        $this->db->order_by('id', 'DESC');
        $this->db->like("customer_name", $keyword);
        return $this->db->get('customers');
    
}	

}




