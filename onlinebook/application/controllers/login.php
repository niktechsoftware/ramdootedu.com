<?php
class Login extends CI_Controller{
	function index(){
		if($this->session->userdata("is_login") == true){
			$this->logout();
		}
		$this->load->view("login");
	}
	
	function auth(){
		$data = $this->loginmodel->validate();
		if($data['is_login'] == 'true'){
			$this->session->set_userdata($data);
			redirect(base_url()."apanel");
		}else{
			redirect(base_url()."login/index/authFals");
		}
	}
	
	function unlock(){
		$query = $this->loginmodel->validateLock();
	
		if($query){  //if user Lock validation return true after validation
			$this->session->set_userdata('is_lock',true);
			redirect(base_url()."apanel");
		}
		else{ // if user not validate the credential ....
			redirect("index.php/homeController/lockPage/false");
		}
	}
	
	function logout()
	{
		$chatData = array("is_login" => false);
		$this->db->where("clinic_id",$this->session->userdata("clinic_id"));
		$this->db->update("chat",$chatData);
		
		$this->session->unset_userdata();
		$this->session->sess_destroy();
		redirect(base_url().'login/index.jsp');
	}
	
	function lockPage(){
		if($this->session->userdata("is_login") == false){
			redirect(base_url().'login/index.jsp');
		}
		$data['title'] = $this->session->userdata("name");
		$this->session->set_userdata('is_lock', false);
		$this->load->view("lockPage", $data);
	}
	
	function forgot(){
		$this->load->view("forgot");
	}
    function changepass(){
		$a= $this->session->userdata("name");
		$data['subPage'] = 'Change Password';
		$data['smallTitle'] = 'Change Password';
		$data['pageTitle'] = 'Change password';
		$data['title'] = 'Change Your Password';
		$this->db->where('username',$a);

		$data['body']=$this->db->get('general_settings')->row();
		
		$data['headerCss'] = 'headerCss/patientCss';
		$data['footerJs'] = 'footerJs/patientJs';
		$data['mainContent'] = 'changepass';
	
		$this->load->view("include/template", $data);
	
		}
    function changepassword()
	{
		$id = $this->input->post('id');
		 $newpass=$this->input->post('newpass');
		 $confirmpass=$this->input->post('confirmpass');
		 if($confirmpass==$newpass)
		 {
		 	$abc=md5($confirmpass);
		 	$a=array('password'=>$abc);
		 	$this->db->where('id',$id);
		 	$data=$this->db->update('general_settings',$a);
		 	if($data)
		 	{
		 		redirect(base_url().'apanel/index.jsp');
		 	}

		 }
		 else
		 {
		 	echo "Both password are not match";?>
		 	<a href="<?php base_url();?>changepass.jsp">Back</a>
		 <?php }
			//$this->db->update('general_settings',$a);
	}
	
	
}