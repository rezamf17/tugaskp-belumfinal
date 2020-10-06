<?php
class Model_siswa extends CI_Model
{
	public function get($id = null)
	{
		$this->db->from('user');
		$this->db->where('level', 3);
		$query = $this->db->get();
		return $query;
	}
	public function X($id = null){
		$this->db->from('user');
		$this->db->where('kelas','X-RPL-1');
		$query = $this->db->get();
		return $query;
	}
	public function XI($id = null){
		$this->db->from('user');
		$this->db->where('kelas','XI-RPL-1');
		$query = $this->db->get();
		return $query;
	}
	public function XII($id = null){
		$this->db->from('user');
		$this->db->where('kelas','XII-RPL-1');
		$query = $this->db->get();
		return $query;
	}
}