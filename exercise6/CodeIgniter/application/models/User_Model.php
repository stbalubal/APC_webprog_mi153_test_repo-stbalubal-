<?php 
   class User_Model extends CI_Model {
	
      function __construct() { 
         $this->load->database();
      } 
   
      public function get_users($nickname=False) { 
	  
         if ($nickname === false){
			 $query = $this->db->get('users');
			 return $query->result_array();
		 }
		 
		 $query = $this->db->get_where('users', array('nickname' => $nickname));
		 return $query->row_array();
       }
   
      public function get_users_by_id($user_id = 0) { 
	  
		if ($user_id === 0){
			$query = $this->db->get('users');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('users',array('user_id' => $user_id));
		return $query->result_array();
      }
	  
	  public function set_users($user_id = 0)
	  {
		  $this->load->helper('url');
		  
		  $nickname = url_title($this->input->post('title'),'dash', TRUE);
		  
		  $data = array(
				'name' => $this->input->post('name'),
				'nickname' => $this->input->post('nickname'),
				'email' => $this->input->post('email'),
				'home' => $this->input->post('home'),
				'gender' => $this->input->post('gender'),
				'number' => $this->input->post('number'),
				'comment' => $this->input->post('comment')
		 );
		 
		 if ($user_id == 0) {
			 return $this->db->insert('users', $data);
		 } else {
			 $this->db->where('user_id', $user_id);
			 return $this->db->update('users',$data);
		 }
	  }
   
      public function delete_user($user_id) {
      $this->db->where('user_id', $user_id);
	  return $this->db->delete('users');
   }
   }
?> 