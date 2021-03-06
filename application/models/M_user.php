<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
	public function update($data, $id) {
		$this->db->where("id_user", $id);
		$this->db->update("user", $data);

		return $this->db->affected_rows();
	}

	public function select($id = '') {
		if ($id != '') {
			$this->db->where('id_user', $id);
		}

		$data = $this->db->get('user');

		return $data->row();
	}
}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */