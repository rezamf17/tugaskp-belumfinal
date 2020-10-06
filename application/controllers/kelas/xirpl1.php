<?php
class Xirpl1 extends CI_Controller
{


    function index()
    {
    	check_not_login();
        $this->load->model('model_siswa');
    	$data['roww'] = $this->model_siswa->XI();
    	 $this->template->load('template', 'Siswa/XI-RPL-1', $data);
    }
}