<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$data['body'] = "home";
		$this->load->view('include/template',$data);
	}
	
	public function about(){
		$data['body'] = "about";
		$this->load->view('include/template',$data);
	}
	
	public function vacancies(){
		$data['body'] = "vacancies";
		$this->load->view('include/template',$data);
	}
	
	public function courses(){
		$id = $this->uri->segment(3);
		$this->db->where("id",$id);
		$data['val'] = $this->db->get("courses")->row();
		$data['body'] = "courses";
		$this->load->view('include/template',$data);
	}
	
	public function classes(){
		$data['body'] = "classes";
		$this->load->view('include/template',$data);
	}
	
	public function verification(){
		$data['isShow'] = "false";
		$data['body'] = "verification";
		$this->load->view('include/template',$data);
	}
	
	public function freeDemo(){
		$data['body'] = "freeDemo";
		$this->load->view('include/template',$data);
	}
	
	public function faq(){
		$data['body'] = "faq";
		$this->load->view('include/template',$data);
	}
	
	public function career(){
		$data['body'] = "career";
		$this->load->view('include/template',$data);
	}
	
	public function contact(){
		$data['body'] = "contact";
		$this->load->view('include/template',$data);
	}
	
	public function register(){
		$data['body'] = "register";
		$this->load->view('include/template',$data);
	}
	
	public function saveRegister(){
		
		$i = 'false';
		$j = 'false';
		
		$student_id=$this->input->post("student_id");
		$dt=date("y-m-d");
		$invoice = array(
				"invoice_no" => $student_id,
				"reason" => "New Admission",
				"invoice_date" => date("Y-m-d")
		);
		$this->db->insert("invoice_serial",$invoice);
		
		if($this->input->post("submitType") == 'student'){
			$isApprove = 'no';
		}
		elseif($this->input->post("submitType") == 'admin'){
			$isApprove = 'yes';
		}
		
		$photo_name = time().trim($_FILES['image']['name']);
		$this->load->library('upload');
		// Set configuration array for uploaded photo.
		$image_path = realpath(APPPATH . '../assets/images/stuImage');
		$config['upload_path'] = $image_path;
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '120';
		$config['file_name'] = $photo_name;
		// Upload first photo and create a thumbnail of it.
		if (!empty($_FILES['image']['name'])) {
			$this->upload->initialize($config);
			if ($this->upload->do_upload('image')) {
				// ---------------------------------- Redirect Success Page ----------------------
				$i = 'true';
			}
			else{
				echo $this->upload->display_errors();
			}
		}
		
		$signature = time().trim($_FILES['signature']['name']);
		$this->load->library('upload');
		// Set configuration array for uploaded photo.
		$image_path = realpath(APPPATH . '../assets/images/stuImage');
		$config['upload_path'] = $image_path;
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '100';
		$config['file_name'] = $signature;
		// Upload first photo and create a thumbnail of it.
		if (!empty($_FILES['signature']['name'])) {
			$this->upload->initialize($config);
			if ($this->upload->do_upload('signature')) {
				// ---------------------------------- Redirect Success Page ----------------------
				$j = 'true';
			}
			else{
				echo $this->upload->display_errors();
			}
		}
		
		if(($i == 'true') && ($j = 'true')){
			$data = array(
					"student_id" => $this->input->post("student_id"),
					"name" => $this->input->post("name"),
					"fName" => $this->input->post("fname"),
					"address" => $this->input->post("address"),
					"city" => $this->input->post("city"),
					"state" => $this->input->post("state"),
					"pin" => $this->input->post("pin"),
					"mobile" => $this->input->post("mobile"),
					"dob" => date("Y-m-d", strtotime($this->input->post("dob"))),
					"heighQ" => $this->input->post("heighQ"),
					"courseApplied" => $this->input->post("courseApplied"),
					"timing" => $this->input->post("timing"),
					"gender" => $this->input->post("gender"),
					"photo" => $photo_name,
					"signature" => $signature,
					"email" => $this->input->post("email"),
					"password" => $this->input->post("password"),
					"total_fee" => $this->input->post("total_fee"),
					"fee_method" => $this->input->post("fee_method"),
					"joinDate" => $dt,
					"joinTime" => date("h:i:s"),
					"isApprove" => $isApprove
			);
		
			if($this->db->insert("student_info",$data)){
				if($this->input->post("submitType") == 'student'){
					redirect("welcome/printRegister/$student_id/lskajdfasiuf09e4iuori,vmnsldfosuteioruetoi");
				}
				elseif($this->input->post("submitType") == 'admin'){
					redirect("apanel/printRegister/$student_id/lkfjsaodif0w9809sodiuf4rifsd9f80w934oiwoifu");
				}
			}
		}
				
	}
	
	public function printRegister(){
		$data['body'] = "printRegister";
		$this->load->view('include/template',$data);
	}
	
	public function certVerify(){
		$id = $this->input->post("name");
		$data['isShow'] = "true";
		$data['result'] = $this->db->query("SELECT * FROM certificate WHERE certificate_no = '$id' OR stu_id = '$id'");
		$data['body'] = "verification";
		$this->load->view('include/template',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */