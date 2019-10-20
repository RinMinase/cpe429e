<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends CI_Controller {
	public function __construct() { parent::__construct(); }

	public function register() {
		$this->form_validation->set_rules('txtUsername', 'Username', 'min_length[6]');
		$this->form_validation->set_rules('txtPassword', 'Password', 'matches[txtRepeatPassword]');
		$this->form_validation->set_rules('txtRepeatPassword', 'Repeat Password', 'matches[txtPassword]');

		if($this->input->post('txtUsername') != 'admin' && $this->form_validation->run($this)){
			$this->AccountsModel->insert();
			redirect('registration');
		} else {
			$error['msg'] = validation_errors();
			redirect('registration');
		}
	}

	public function update() {
		$this->form_validation->set_rules('txtUsername', 'Username', 'min_length[6]');
		$this->form_validation->set_rules('txtPassword', 'Password', 'matches[txtRepeatPassword]');
		$this->form_validation->set_rules('txtRepeatPassword', 'Repeat Password', 'matches[txtPassword]');

		if($this->input->post('txtUsername') != 'admin' && $this->form_validation->run($this)){
			$this->AccountsModel->edit();
			redirect('dashboard');
		} else {
			$error['msg'] = validation_errors();
			redirect('dashboard');
		}
	}

	public function admin_update() {
		$this->form_validation->set_rules('txtUsername', 'Username', 'min_length[6]');
		$this->form_validation->set_rules('txtPassword', 'Password', 'matches[txtRepeatPassword]');
		$this->form_validation->set_rules('txtRepeatPassword', 'Repeat Password', 'matches[txtPassword]');

		if($this->input->post('txtUsername') != 'admin' && $this->form_validation->run($this)){
			$this->AccountsModel->admin_edit($this->input->get('uname'));
			redirect('admin_dashboard');
		} else {
			$error['msg'] = validation_errors();
			redirect('admin_edit');
		}
	}

	public function login() {
		$username = $this->input->post("loginUsername");
		$password = $this->input->post("loginPassword");

		if($username == "admin" && $password == "admin") {
			$this->session->set_userdata('data', 'admin');
			redirect('admin_dashboard');
		} else {
			$this->AccountsModel->checkLoginInput($username, $password);
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('index');
	}

	public function delete() {
		$username = $this->session->data;
		$password = $this->input->post("deletePassword");

		$correct_password = $this->AccountsModel->returnPassword();

		if($password == $correct_password) {
			$this->AccountsModel->deleteUser($username, $password);

			$this->session->sess_destroy();
			redirect('index');
		} else {
			redirect('dashboard');
		}
	}


	public function admin_delete() {
		$username = $this->input->get("uname");
		$this->AccountsModel->deleteAdmin($username);
		redirect('admin_dashboard');
	}
}
