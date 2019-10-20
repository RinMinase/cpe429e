<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hacktivity extends CI_Controller {
	public function __construct(){ parent::__construct(); }

	public function index() { $this->load->view('index'); }
	public function profile() { $this->load->view('profile'); }
	public function sched() { $this->load->view('sched'); }
	public function registration() { $this->load->view('registration'); }
	public function dashboard() { $this->load->view('dashboard'); }
	public function admin_dashboard() { $this->load->view('admin_dashboard'); }
	public function admin_add() { $this->load->view('admin_add'); }
	public function admin_edit() { $this->load->view('admin_edit'); }
}
