<?php


class Add_users extends CI_Model
{
	
	public function register($data)
	{
		$this->load->database();
		
		$count = $this->db->insert("users", $data);

		if($count>0)
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}


	public function getuser()
	{
		$this->load->database();

		$query = $this->db->get("users");
		$rows = $query->result();
		$data = array('result' => $rows);
		return $data;
	}

	function newsletter_subscriber($data)
	{	
    	$this->load->database();
		$query = $this->db->where_in('email', $data)
		 					->count_all_results('subscribers');
		 
		 if($query > 0 )
		 {	
		 	return 0;
		 	
		 }
		 else
		 {
		 	$query = $this->db->insert('subscribers', $data);
		 	return 1;
		 }
        
        
	}

	public function valid_login($name, $password)
	{
		$query = $this->db->where('username',$name)
							->where('password',$password)
							->get('users');
		if($query->num_rows())
		{
			return $query->row()->id;
		}
		else
		{
			return false;
		}
	}

	 
}

?>