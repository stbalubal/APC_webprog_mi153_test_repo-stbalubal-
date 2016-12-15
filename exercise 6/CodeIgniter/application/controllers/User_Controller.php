<?php 
   class User_controller extends CI_Controller {
	
      function __construct() { 
         parent::__construct(); 
         $this->load->helper('url');
		 $this->load->model('User_Model');
      } 
  
      public function index() { 
         $data['Form'] = $this->User_Model->get_users(); 
         
         $this->load->view('Form/index.php',$data); 
      }
	  
	  public function User_View($nickname = NULL){
		  $data['views_item'] = $this->User_Model->get_users($nickname);
		  
		  if (empty($data['views_item'])){
			  show_404();
		  }
		  
		  $data['title'] = $data['views_item'];
		  
		  $this->load->view('Form/User_View', $data);
	  }
	  
	  public function User_Create(){
		  $this->load->helper('Form');
		  $this->load->library('Form_validation');
		  
		  $this->Form_validation->set_rules('name', 'Name', 'required');
		  $this->Form_validation->set_rules('nickname', 'Nickname', 'required');
		  $this->Form_validation->set_rules('email', 'Email', 'required');
		  $this->Form_validation->set_rules('gender', 'Gender', 'required');
		  $this->Form_validation->set_rules('number', 'Number', 'required');
		  
		  if ($this->Form_validation->run() === False)
		  {
			  $this->load->view('Form/User_Create');
		  }
		  
		  else
		  {
			  $this->User_Model->set_users();
			  $this->load->view('Form/User_Success');
		  }
		  
	  }
	  
	  
	  public function edit(){
		  $user_id = $this->uri->segment(3);
		  
		  if(empty($user_id)){
			  show_404();
		  }
		  
		  $this->load->helper('Form');
		  $this->load->library('Form_validation');
		  
		  $data['views_item'] = $this->User_Model->get_user_by_id($user_id);
		  
		  $this->Form_validation->set_rules('name', 'Name', 'required');
		  $this->Form_validation->set_rules('nickname', 'Nickname', 'required');
		  $this->Form_validation->set_rules('email', 'Email', 'required');
		  $this->Form_validation->set_rules('gender', 'Gender', 'required');
		  $this->Form_validation->set_rules('number', 'Number', 'required');
		  
		  if ($this->Form_validation->run() === FALSE){
			  $this->load->view('Form/User_Edit', $data);
		  }
		  else {
			  $this->User_Model->set_users($user_id);
			  redirect( base_url() . 'index.php/Form');
		  }
	  }
  
  
      public function delete() { 
	  
		 $user_id = $this->uri->segment('3'); 
		 
		 if (empty($user_id)){
			 show_404();
		 }
		 
		 $views_item = $this->User_Model->get_user_by_id($user_id);
		 $this->User_Model->delete_user($user_id);
		 redirect( base_url() . 'index.php/Form');
      } 
	  
	  public function mypage_view() {
		  
		  $this->load->view('Form/mypage_view');
	  }
   } 
?>