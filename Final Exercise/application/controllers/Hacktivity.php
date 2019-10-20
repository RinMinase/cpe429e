<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hacktivity extends CI_Controller {
	public function __construct(){ parent::__construct(); }

	public function index() { $this->load->view('index'); }
	public function profile() { $this->load->view('profile'); }
	public function sched() { $this->load->view('sched'); }
	public function registration() { $this->load->view('registration'); }
}
