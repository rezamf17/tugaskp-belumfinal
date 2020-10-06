<?php
class Model_absen extends CI_Model
{
	public function get($id = null)
	{
		$this->db->from('data_absen');
		//$this->db->where($tgl);
		$query = $this->db->get();
		return $query;
	}

	public function fill($range)
	{
		$this->db->from('data_absen');
		$this->db->where('id_tanggal >=',$range[0]);
		$this->db->where('id_tanggal <=',$range[1]);
		$query = $this->db->get();
		return $query;
	}

	public function filter($id = null)
	{
		$user =  $this->fungsi->user_login()->user_id;
		$this->db->from('data_absen');
		$this->db->where(array('nis'=> $user));
		$query = $this->db->get();
		return $query;
	}

	public function none($data)
	{
		$id = $this->fungsi->user_login()->user_id;
		$this->db->from('data_absen');
		$this->db->where('id_tanggal', $id_tanggal[2]);
		$this->db->where('nis', $id[0]);
		$query = $this->db->get();
		return $query;
	}
	 public function getAll()
     {
		  $data_absen = $this->db->get('data_absen')->result();
          return $data_absen;
     }

     public function Xprint(){
     	$this->db->from('data_absen');
     	$this->db->where('id_kelas','X-RPL-1');
		$query = $this->db->get();
		return $query;
     }

     public function XIprint(){
     	$this->db->from('data_absen');
     	$this->db->where('id_kelas','XI-RPL-1');
		$query = $this->db->get();
		return $query;
     }

     public function XIIprint(){
     	$this->db->from('data_absen');
     	$this->db->where('id_kelas','XII-RPL-1');
		$query = $this->db->get();
		return $query;
     }
}