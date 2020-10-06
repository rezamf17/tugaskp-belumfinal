<?php
class operator extends ci_controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_operator');
        // chek_session();
        check_not_login();
    }

    function index()
    {
        $data['record'] =  $this->model_operator->tampildata();
        //$this->load->view('operator/lihat_data',$data);
        $this->template->load('template', 'operator/user_data_view', $data);
    }

    function post()
    {
        if (isset($_POST['submit'])) {
            // proses data
            $nis          = $this->input->post('nis', true);
            $nama         = $this->input->post('nama', true);
            $jeniskelamin = $this->input->post('jenis_kelamin', true);
            $username     = $this->input->post('username', true);
            $password     = $this->input->post('password', true);
            $alamat       = $this->input->post('alamat', true);
            $kelas        = $this->input->post('kelas', true);
            $level        = $this->input->post('level', true);
            $data         = array(
                'nis' => $nis,
                'name' => $nama,
                'jenis_kelamin' => $jeniskelamin,
                'username' => $username,
                'password' => sha1($password),
                'alamat' => $alamat,
                'kelas' => $kelas,
                'level' => $level
            );
            $this->db->insert('user', $data);
            redirect('user');
        } else {
            //$this->load->view('operator/form_input');
            $this->template->load('template', 'operator/user_add_view');
        }
    }

    function edit()
    {
        if (isset($_POST['submit'])) {
            // proses kategori
            $status = $this->input->post('status', true);
            $this->db->where('nim', $nim);
            $this->db->update('operator', $data);
            redirect('operator');

            $id         =  $this->input->post('id', true);
            $nama       =  $this->input->post('nama', true);
            $jeniskelamin = $this->input->post('jenis_kelamin', true);
            $username   =  $this->input->post('username', true);
            $password   =  $this->input->post('password', true);
            $alamat       = $this->input->post('alamat', true);
            $kelas        = $this->input->post('kelas', true);
            $level        = $this->input->post('level', true);
            if (empty($password)) {
                $data  =  array(
                    'nama_lengkap' => $nama,
                    'username' => $username,
                    'jenis_kelamin' => $jeniskelamin,
                    'alamat' => $alamat,
                    'kelas' => $kelas,
                    'level' => $level
                );
            } else {
                $data =  array(
                    'nama_lengkap' => $nama,
                    'username' => $username,
                    'password' => sha1($password)
                );
            }
            $this->db->where('operator_id', $id);
            $this->db->update('operator', $data);
            redirect('operator');
        } else {
            $id =  $this->uri->segment(3);
            $data['record'] =  $this->model_operator->get_one($id)->row_array();
            //$this->load->view('operator/form_edit',$data);
            $this->template->load('template', 'operator/user_edit_view', $data);
        }
    }

    function delete()
    {
        $id =  $this->uri->segment(3);
        $this->db->where('operator_id', $id);
        $this->db->delete('operator');
        redirect('operator');
    }
    
}
