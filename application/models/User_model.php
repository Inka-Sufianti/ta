<?php 
 
class User_model extends CI_Model{

	private $_table = "guru";

	public function doLogin(){
		$post = $this->input->post();

		$this->db->where('nip', $post['nip']);
		$user = $this->db->get($this->_table)->row();

		if ($user) {
			$isPasswordTrue =  password_verify($post["password"], $user->password);

			$isAdmin = $user->role == "admin";

			if ($isPasswordTrue && isAdmin) {
				
				$this->session->set_userdata(['user_logged' => $user]);
				$this->_updateLastLogin($user->id_guru);
				return true;
			}
		}

		return false;
	}

	public function isNotLogin(){
		return $this->session->userdata('user_logged') === null;
	}

	private function _updateLastLogin($id_guru){
		$sql = "UPDATE {$this->_table} SET last_login=now() WHERE id_guru={$id_guru}";
		$this->db->query($sql);
	}

}