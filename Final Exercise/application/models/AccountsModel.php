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
					'spouse' => $spouse,
					'contact' => $this->input->post('txtContact'),
					'email' => $this->input->post('txtEmail')
				);

		$this->db->insert('users', $data);
	}

	public function checkLoginInput($un, $pw) {
		$sql = "SELECT username FROM users WHERE username LIKE '$un' AND password LIKE '$pw'";
		$query = $this->db->query($sql);

		if($query->row(0)->username == $un) {
			$this->session->set_userdata('data', $un);
			redirect('dashboard');
		} else {
			redirect('index');
		}
	}

	public function edit() {
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
					'spouse' => $spouse,
					'contact' => $this->input->post('txtContact'),
					'email' => $this->input->post('txtEmail')
				);

		$this->db->where('username', $this->session->data);
		$this->db->update('users', $data);
	}

	public function admin_edit($previousUsername) {
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
					'spouse' => $spouse,
					'contact' => $this->input->post('txtContact'),
					'email' => $this->input->post('txtEmail')
				);

		$this->db->where('username', $previousUsername);
		$this->db->update('users', $data);
	}

	public function deleteUser($un, $pw) {
		$sql = "DELETE FROM users WHERE username='$un' AND password='$pw'";
		$query = $this->db->query($sql);
	}

	public function deleteAdmin($un) {
		$sql = "DELETE FROM users WHERE username='$un'";
		$query = $this->db->query($sql);
	}


	public function getUsername() {
		$sql = "SELECT username FROM users WHERE username='" . $this->session->data . "'";
		$query = $this->db->query($sql);

		echo $query->row(0)->username;
	}

	public function getPassword() {
		$sql = "SELECT password FROM users WHERE username='" . $this->session->data . "'";
		$query = $this->db->query($sql);

		echo $query->row(0)->password;
	}

	public function returnPassword() {
		$sql = "SELECT password FROM users WHERE username='" . $this->session->data . "'";
		$query = $this->db->query($sql);

		return $query->row(0)->password;
	}

	public function getFName() {
		$sql = "SELECT firstname FROM users WHERE username='" . $this->session->data . "'";
		$query = $this->db->query($sql);

		echo $query->row(0)->firstname;
	}

	public function getMName() {
		$sql = "SELECT middlename FROM users WHERE username='" . $this->session->data . "'";
		$query = $this->db->query($sql);

		if ($query->row(0)->middlename == "") {
			echo "''";
		} else {
			echo $query->row(0)->middlename;
		}
	}

	public function getLName() {
		$sql = "SELECT lastname FROM users WHERE username='" . $this->session->data . "'";
		$query = $this->db->query($sql);

		echo $query->row(0)->lastname;
	}

	public function getBirthday() {
		$sql = "SELECT birthday FROM users WHERE username='" . $this->session->data . "'";
		$query = $this->db->query($sql);

		echo $query->row(0)->birthday;
	}

	public function getGender() {
		$sql = "SELECT gender FROM users WHERE username='" . $this->session->data . "'";
		$query = $this->db->query($sql);

		return $query->row(0)->gender;
	}

	public function getStatus() {
		$sql = "SELECT status FROM users WHERE username='" . $this->session->data . "'";
		$query = $this->db->query($sql);

		echo $query->row(0)->status;
	}

	public function getSpouse() {
		$sql = "SELECT spouse FROM users WHERE username='" . $this->session->data . "'";
		$query = $this->db->query($sql);

		echo $query->row(0)->spouse;
	}

	public function getContact() {
		$sql = "SELECT contact FROM users WHERE username='" . $this->session->data . "'";
		$query = $this->db->query($sql);

		echo $query->row(0)->contact;
	}

	public function getEmail() {
		$sql = "SELECT email FROM users WHERE username='" . $this->session->data . "'";
		$query = $this->db->query($sql);

		

		if ($query->row(0)->email == "") {
			echo "''";
		} else {
			echo $query->row(0)->email;
		}
	}

	/*******************************************/

	public function getUsernameByUsername($username) {
		$sql = "SELECT username FROM users WHERE username='" . $username . "'";
		$query = $this->db->query($sql);

		echo $query->row(0)->username;
	}

	public function getPasswordByUsername($username) {
		$sql = "SELECT password FROM users WHERE username='" . $username . "'";
		$query = $this->db->query($sql);

		echo $query->row(0)->password;
	}

	public function returnPasswordByUsername($username) {
		$sql = "SELECT password FROM users WHERE username='" . $username . "'";
		$query = $this->db->query($sql);

		return $query->row(0)->password;
	}

	public function getFNameByUsername($username) {
		$sql = "SELECT firstname FROM users WHERE username='" . $username . "'";
		$query = $this->db->query($sql);

		echo $query->row(0)->firstname;
	}

	public function getMNameByUsername($username) {
		$sql = "SELECT middlename FROM users WHERE username='" . $username . "'";
		$query = $this->db->query($sql);

		if ($query->row(0)->middlename == "") {
			echo "''";
		} else {
			echo $query->row(0)->middlename;
		}
	}

	public function getLNameByUsername($username) {
		$sql = "SELECT lastname FROM users WHERE username='" . $username . "'";
		$query = $this->db->query($sql);

		echo $query->row(0)->lastname;
	}

	public function getBirthdayByUsername($username) {
		$sql = "SELECT birthday FROM users WHERE username='" . $username . "'";
		$query = $this->db->query($sql);

		echo $query->row(0)->birthday;
	}

	public function getGenderByUsername($username) {
		$sql = "SELECT gender FROM users WHERE username='" . $username . "'";
		$query = $this->db->query($sql);

		return $query->row(0)->gender;
	}

	public function getStatusByUsername($username) {
		$sql = "SELECT status FROM users WHERE username='" . $username . "'";
		$query = $this->db->query($sql);

		echo $query->row(0)->status;
	}

	public function getSpouseByUsername($username) {
		$sql = "SELECT spouse FROM users WHERE username='" . $username . "'";
		$query = $this->db->query($sql);

		echo $query->row(0)->spouse;
	}

	public function getContactByUsername($username) {
		$sql = "SELECT contact FROM users WHERE username='" . $username . "'";
		$query = $this->db->query($sql);

		echo $query->row(0)->contact;
	}

	public function getEmailByUsername($username) {
		$sql = "SELECT email FROM users WHERE username='" . $username . "'";
		$query = $this->db->query($sql);

		

		if ($query->row(0)->email == "") {
			echo "''";
		} else {
			echo $query->row(0)->email;
		}
	}


	/*******************************************/


	public function printUsers() {
		$query = $this->db->query("SELECT * FROM users");

		foreach($query->result() as $row) {

			echo '<tr>';
			echo '<td>' . $row->username . '</td>';
			echo '<td>' . $row->password . '</td>';
			echo '<td>' . $row->firstname . '</td>';
			echo '<td>' . $row->middlename . '</td>';
			echo '<td>' . $row->lastname . '</td>';
			echo '<td>' . $row->birthday . '</td>';
			echo '<td>' . $row->gender . '</td>';
			echo '<td>' . $row->status . '</td>';
			echo '<td>' . $row->spouse . '</td>';
			echo '<td>' . $row->contact . '</td>';
			echo '<td>' . $row->email . '</td>';

			echo form_open('admin_edit?uname=' . $row->username);
				echo '<td><button type="submit">edit</button></td>';
			echo form_close();

			echo form_open('admin_delete?uname=' . $row->username);
				echo '<td><button type="submit">delete</button></td>';
			echo form_close();

			echo '</tr>';

		}
	}
}


?>