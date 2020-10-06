<?php

class Fungsi
{
   protected $ci;

   function __construct()
   {
      $this->ci = &get_instance();
   }

   // function user_login()
   // {
   //    $this->ci->load->model('model_operator');
   //    $user_id = $this->ci->session->userdata('operatorid');
   //    $user_data = $this->ci->user_model->get($user_id)->row();
   //    return $user_data;
   // }
   function onclick_konfirmasi_absen(){
      while ($get_absen=$query->fetch_assoc()) {
         $id = $this->input->post('id', true);
         $nama =$this->fungsi->user_login()->name;
         $kelas = $this->input->post('kelas', true);
         $tanggal = date("Y-m-d");
         $jam = date("H:i:s");
         $status = $this->fungsi->user_login()->name;

         if ($get_absen['st_jam_msk']==="Menunggu") {
           $status = "Absen masuk";
         }
      }
   }
   function user_login()
   {
      $this->ci->load->model('model_user');
      $user_id = $this->ci->session->userdata('userid');
      $user_data = $this->ci->model_user->get($user_id)->row();
      return $user_data;
   }
   function disable()
   {
      $disable = 'disabled';
   }
}
