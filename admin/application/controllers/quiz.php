<?php
class Quiz extends CI_Controller{
	function quizQuestion(){
		$this->load->view("exam/quizQuestion");
	}
	function quizTest(){
		$this->load->view("exam/test");
	}
}