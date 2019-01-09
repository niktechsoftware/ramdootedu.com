<?php
class loginController extends CI_Controller{
	public function stuLogin(){
		$data['body'] = "vacancies";
		$this->load->view('include/template',$data);
	}
	
	function index(){
		if($this->session->userdata("is_login") == true){
			$this->session->unset_userdata();
			$this->session->sess_destroy();
		}
		$data['title'] = 'Gfinch-School Login Area';
		$this->load->helper("sms");
		//sms("4947cf80573bb1b355d918ad91fe35fd","Hi pushpendra","GFINCH","7668538172");
		$this->load->view("login", $data);
	}
	
	function login_check(){
		$query = $this->loginModel->validate();
	
		if($query['is_login']){  //if user validation return true after validation
			$this->session->set_userdata($query);
			//echo $query['login_type'];
			redirect(base_url()."login/index");
		}
		else{ // if user not validate the credential ....
			redirect(base_url()."homeController/index/authFalse");
		}
	}
	
	function unlock(){
		$query = $this->loginModel->validateLock();
	
		if($query){  //if user Lock validation return true after validation
			$this->session->set_userdata('is_lock',true);
			redirect("index.php/login/index");
		}
		else{ // if user not validate the credential ....
			redirect("index.php/homeController/lockPage/false");
		}
	}
	
	function logout()
	{
		$this->session->unset_userdata();
		$this->session->sess_destroy();
		redirect('index.php/homeController');
	}
	
	function lockPage(){
		if($this->session->userdata("is_login") == false){
			redirect('index.php/homeController');
		}
		$data['title'] = $this->session->userdata("name");
		$this->session->set_userdata('is_lock', false);
		$this->load->view("lockPage", $data);
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