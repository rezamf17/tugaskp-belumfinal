<?php
class Xrpl1 extends CI_Controller
{


    function index()
    {
    	check_not_login();
        $this->load->model('model_siswa');
    	$data['roww'] = $this->model_siswa->X();
    	 $this->template->load('template', 'Siswa/X-RPL-1', $data);
    }
}