<?php 

class AccountsModel extends CI_Model{
	public function insert() {

		$spouse = (($this->input->post('civilstatus')) == 'married') ? $this->input->post('txtSpouse') : ' ';

		$data = array(
					'username' => $this->input->post('txtUsername'),
					'password' => $this->input->post('txtPassword'),
					'firstname' => $this->input->post('txtFName'),
					'middlename' => $this->input->post('txtMName'),
					'lastname' => $this->input->post('txtLName'),
					'birthday' => $this->input->post('dateBirthday'),
					'gender' => $this->input->post('gender'),
					'status' => $this->input->post('civilstatus'),
					'status' => $spouse,
					'spouse' => $this->input->post('txtContact'),
					'contact' => $this->input->post('txtEmail')
				);

		$this->db->insert('users', $data);
	}

}


?>