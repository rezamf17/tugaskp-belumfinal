<?php
class RekapAbsenSiswa extends ci_controller
{
	public function index()
	{
		check_not_login();
        $this->load->model('model_absen');
        $data['row'] = $this->model_absen->filter();
		$this->template->load('template','rekapabsen', $data);
		$user_id = $this->input->post('user_id', true);
	}
}
