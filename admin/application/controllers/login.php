<?php
class Login extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('loginModel');
	}
	public function index(){
		if($this->session->userdata("is_login") == true){
			$this->session->unset_userdata();
			$this->session->sess_destroy();
		}
		$data['title'] = "daffodils public school";
		$this->load->view("admin/login",$data);
	}
	
	public function forgotPass(){
		if($this->session->userdata("is_login") == true){
			$this->session->unset_userdata();
			$this->session->sess_destroy();
		}
		$data['title'] = "Forgot Password";
		$this->load->view("admin/forgotPass",$data);
	}
	
	public function stuLogin(){
		$data['body'] = "vacancies";
		$this->load->view('include/template',$data);
	}
		
	function login_check(){
		$query = $this->loginModel->validate();
	
		if($query['is_login']){  //if user validation return true after validation
			$this->session->set_userdata($query);
			//echo $query['login_type'];
			redirect(base_url()."apanel/index");
		}
		else{ // if user not validate the credential ....
			redirect(base_url()."login/index/authFalse");
		}
	}
		
	function lockPage(){
		if($this->session->userdata("is_login") == false){
			redirect(base_url().'login');
		}
		$data['title'] = $this->session->userdata("name");
		$this->session->set_userdata('is_lock', false);
		$this->load->view("admin/lockPage", $data);
	}
	
	function unlock(){
		$query = $this->loginModel->validateLock();
	
		if($query){  //if user Lock validation return true after validation
			$this->session->set_userdata('is_lock',true);
			redirect(base_url()."apanel/index");
		}
		else{ // if user not validate the credential ....
			redirect(base_url()."login/lockPage/false");
		}
	}
	
	function logout()
	{
		$this->session->unset_userdata();
		$this->session->sess_destroy();
		redirect(base_url().'login/index');
	}

	function sendEmail(){
	
		$userid=$this->input->post("userID");
		$email1=$this->input->post("email1");
		
		$this->db->where("email",$email1);
		$this->db->where("emp_no",$userid);
		$this->db->from('employee_info');
		$count = $this->db->count_all_results();
		
		
		$this->db->where("email",$email1);
		$this->db->where("emp_no",$userid);
		$var = $this->db->get('employee_info');
		
		if($count>0){  
			$pass=  $var->row()->password;
		
			$to      = $email1;
			$subject = 'Password recovery';
			$message = "Your password is ".$pass." Thanks for using E-mail to password Recovery System";
			$headers = 'From: rahul@gfinch.in' . "\r\n" .
			    'Reply-To: rahul@gfinch.in' . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();
			
			$succ = mail($to, $subject, $message, $headers);
			if($succ){
				redirect("index.php/homeController/index/8");
			}
			else{
				echo "error";
			}
		}
		else{
		$this->db->where("email",$email1);
		$this->db->where("student_id",$userid);
		$this->db->from('student_info');
		$count = $this->db->count_all_results();
		
		
		$this->db->where("email",$email1);
		$this->db->where("student_id",$userid);
		$var = $this->db->get('student_info');
			if($count>0){  
				$pass=  $var->row()->password;
				$to      = $email1;
				$subject = 'Password recovery';
				$message = "Your password is ".$pass." Thanks for using E-mail to password Recovery System";
				$headers = 'From: rahul@gfinch.in' . "\r\n" .
				    'Reply-To: rahul@gfinch.in' . "\r\n" .
				    'X-Mailer: PHP/' . phpversion();
				
				$succ = mail($to, $subject, $message, $headers);
				if($succ){
					redirect("index.php/homeController/index/8");
				}
				else{
					echo "error";
				}
			}
			else{
				$to = $email1;
				$subject = 'Password recovery';
				$message = "Your sorry Please enter a valid E_mail";
				$headers = 'From: rahul@gfinch.in' . "\r\n" .
				    'Reply-To: rahul@gfinch.in' . "\r\n" .
				    'X-Mailer: PHP/' . phpversion();
				
				$succ = mail($to, $subject, $message, $headers);
				if($succ){
					redirect("index.php/homeController/index/8");
				}
				else{
					echo "error";
				}
			}
		} // end if condition
	
	} // End send email function sendEmail

	
}