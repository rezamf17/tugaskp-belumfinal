<?php
class Input_Data_Siswa extends CI_Controller
{
    function index()
    {
        // chek_session();
        check_not_login();
        $this->load->model('model_siswa');
        $data['roww'] = $this->model_siswa->get();
        $this->template->load('template', 'InputDataSiswa', $data);
    }
    
    public function murid()
    {
    	 $this->template->load('template', 'X-RPL-1', $data);
    }
}
