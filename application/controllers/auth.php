<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
   public function login()
   {
      check_already_login();
      $this->load->view('login_view');
   }

   public function process()
   {
      $post = $this->input->post(null, TRUE);
      if (isset($post['submit'])) {
         $this->load->model('model_user');
         $query = $this->model_user->login($post);
         if ($query->num_rows() > 0) {
            $row = $query->row();
            $params = array(
               'userid' => $row->user_id,
               'level' == $row->level
            );
            $this->session->set_userdata($params);
            echo "<script>
            alert('Login Berhasil');
            window.location='" . site_url('dashboard') . "';
            </script>";
         } else {
            echo "<script>
            alert('Username atau password salah !');
            window.location='" . site_url('auth/login') . "';
            </script>";
         } 
      }
   }
   public function logout()
   {
      $params = array('userid', 'level');
      $this->session->unset_userdata($params);
      redirect('auth/login');
   }
}
