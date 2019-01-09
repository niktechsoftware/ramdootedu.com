<?php
class InvoiceController extends CI_Controller{
	
	public function registerC(){
		$data['studentId'] = $this->uri->segment(3);
		$this->load->view("invoice/registerC",$data);
	}
	
	public function feeInvoicePrint(){
		$data['studentId'] = $this->uri->segment(3);
		$data['invoice'] = $this->uri->segment(4);
		$this->load->view("invoice/feeInvoice",$data);
	}
}