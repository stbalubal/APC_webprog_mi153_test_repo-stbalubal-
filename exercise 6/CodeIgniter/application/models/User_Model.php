<?php 
   class User_model extends CI_Model {
	
      function __construct() { 
         $this->load->database();
      } 
   
      public function get_users($nickname=False) { 
	  
         if ($nickname === false){
			 $query = $this->db->get('Form');
			 return $query->result_array();
		 }
		 
		 $query = $this->db->get_where('Form', array('nickname' => $nickname));
		 return $query->row_array();
       }
   
      public function get_users_by_id($user_id = 0) { 
	  
		if ($user_id === 0){
			$query = $this->db->get('Form');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('Form',array('user_id' => $user_id));
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
			 return $this->db->insert('Form', $data);
		 } else {
			 $this->db->where('user_id', $user_id);
			 return $this->db->update('Form',$data);
		 }
	  }
   
      public function delete($user_id) {
      $this->db->where('user_id', $user_id);
	  return $this->db->delete('Form');
   }
   }
?> 