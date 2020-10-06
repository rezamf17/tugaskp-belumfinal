<?php
class Xiirpl1 extends CI_Controller
{


    function index()
    {
    	check_not_login();
        $this->load->model('model_siswa');
    	$data['roww'] = $this->model_siswa->XII();
    	 $this->template->load('template', 'Siswa/XII-RPL-1', $data);
    }
}