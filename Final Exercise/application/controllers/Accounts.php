<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// $this->load->model('AccountsModel');
	}

	public function register() {
		$this->form_validation->set_rules('txtUsername', 'Username', 'min_length[6]');
		$this->form_validation->set_rules('txtPassword', 'Password', 'matches[txtRepeatPassword]');
		$this->form_validation->set_rules('txtRepeatPassword', 'Repeat Password', 'matches[txtPassword]');

		// echo $this->input->post('txtUsername');
		// echo $this->input->post('txtPassword');
		// echo $this->input->post('txtRepeatPassword');


		if($this->form_validation->run($this)){
			$this->AccountsModel->insert();
			redirect('registration');
			echo '<script>alert("1");</script>';
		} else {
			$error['msg'] = validation_errors();
			echo '<script>alert("2");</script>';
			echo validation_errors();
			//$this->displayError($error);
		}
	}
}
