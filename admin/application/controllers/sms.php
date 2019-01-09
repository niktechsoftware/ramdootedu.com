<?php
class Sms extends CI_Controller{
	function single(){
		$val=$this->db->get("sms_setting")->row();
		$senderiD=$val->sender_id;
		$authkey=$val->auth_key;
	
		$this->load->helper("sms");
		$msg =	$this->input->post("msg");
		$fmobile = $this->input->post("mobile");
		sms($authkey,$msg,$senderiD,$fmobile);
		redirect(base_url()."apanel/singleSms");
	}
	
	function all(){
		$val=$this->db->get("sms_setting")->row();
		$senderiD=$val->sender_id;
		$authkey=$val->auth_key;
	
		$this->load->helper("sms");
		$msg =	$this->input->post("msg");
		$fmobile = $this->input->post("mobile");
		foreach ($this->db->query("SELECT mobile FROM student_info")->result() as $row):
			$fmobile = $row->mobile;
			sms($authkey,$msg,$senderiD,$fmobile);
		endforeach;
		redirect(base_url()."apanel/allStudent");
	}
}