<?php

/**
 * 
 */
class UsersModel extends CI_Model
{
	
	
public function get_users()
	{
	if(!empty($this->input->get("search"))){
	$this->db->like('firstname', $this->input->get("search"));
	 $this->db->or_like('phone', $this->input->get("search"));
	}	
     $query = $this->db->get("users");
        return $query->result();
	}

 public function insert_user()
{
  if (isset($_POST['submit'])){
    $data=array(
   'firstname' => $this->input->post('firstname'),
    'lastname' => $this->input->post('lastname'),
     'phone' => $this->input->post('phone'),
     'person' => $this->input->post('person'),
     'organisation' => $this->input->post('organisation'),
      'reason' => $this->input->post('reason')

    );
     return $this->db->insert('users', $data);

}
}








}


?>