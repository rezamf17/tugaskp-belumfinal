<?php
class Absensi extends CI_Controller
{


    function index()
    {
        // chek_session();
        check_not_login();
        $this->load->model('model_absen');
        $data['row'] = $this->model_absen->get();
        $this->template->load('template', 'absen', $data);
    }
}
