<?php
class Account extends CI_Controller{
	function dailyExpense(){
		$name = $this->input->post("name");
		$reason = $this->input->post("reason");
		$paid = $this->input->post("paid");
		$balance = $this->input->post("balance");
		
		$n = 1000 + $this->db->query("SELECT id FROM invoice_serial ORDER BY id DESC LIMIT 1")->row()->id;
		$invoice_no = "LAKSHYA".$n;
		
		$clbalance = $balance-$paid;
		
		$in = array(
				"invoice_no" => $invoice_no,
				"reason" => $reason,
				"invoice_date" => date("Y-m-d")
		);
		$bal = array(
				"closing_balance" => $clbalance
		);
		$dayBook = array(
				"paid_to" => $name,
				"paid_by" => $this->session->userdata("name"),
				"reason" => "dailyExpense",
				"detail" => $reason,
				"dabit_cradit" => "dabit",
				"amount" => $paid,
				"closing_balance" => $clbalance,
				"pay_date" => date("Y-m-d"),
				"pay_mode" => "Cash",
				"invoice_no" => $invoice_no
		);
		
		$this->db->insert("invoice_serial",$in);
		
		$this->db->where("opening_date",date('Y-m-d'));
		$this->db->update("opening_closing_balance",$bal);
		
		$this->db->insert('day_book',$dayBook);
		
		redirect(base_url()."apanel/dailyExpense/true");
	}
	
	public function dayBookDetail(){
		$dt1 = date("Y-m-d", strtotime($this->input->post("sdt")));
		$dt2 =  date("Y-m-d", strtotime($this->input->post("edt")));
		$detailType = $this->input->post("detailType");
		$drCr = $this->input->post("drCr");
		
		if(($detailType == "all") && ($drCr == "all")):
			$a = $this->db->query("select * from day_book where pay_date >= '$dt1' AND pay_date <= '$dt2'");
		elseif (($detailType == "all")&& ($drCr == "all")):
			$a = $this->db->query("select * from day_book where dabit_cradit = '$drCr' AND pay_date >= '$dt1' AND pay_date <= '$dt2'");
		elseif(($detailType == "Student_Fee")&& ($drCr == "all")):
			$a = $this->db->query("select * from day_book where reason = '$detailType' AND pay_date >= '$dt1' AND pay_date <= '$dt2'");
		else:
			$a = $this->db->query("select * from day_book where dabit_cradit = '$drCr' AND reason = '$detailType' AND pay_date >= '$dt1' AND pay_date <= '$dt2'");
		endif;
		$b = $a->num_rows();
		if($b > 0){
			$data['table'] = $a;
			$data['title'] = "Daybook Detail";
			$data['smallTitle'] = "Accounting / Daybook Detail";
			$data['bigTitle'] = "Daybook Detail";
			$data['body'] = "admin/dayBookDetail";
			$data['headerCss'] = "admin/headerCss/dailyExpenseCss";
			$data['footerJs'] = "admin/footerJs/dailyExpenseJs";
			$this->load->view("include/admin/mainContent",$data);
		}
		else{
			$data['title'] = "Daybook Detail";
			$data['smallTitle'] = "Accounting / Daybook Detail";
			$data['bigTitle'] = "Daybook Detail";
			$data['body'] = "admin/dayBookError";
			$data['headerCss'] = "admin/headerCss/dailyExpenseCss";
			$data['footerJs'] = "admin/footerJs/dailyExpenseJs";
			$this->load->view("include/admin/mainContent",$data);
		}
	}
}