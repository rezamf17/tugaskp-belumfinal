<?php
class Absensi_Siswa extends CI_Controller
{

 public function __construct() {
    parent::__construct();
    $this->session->keep_flashdata('message');
}
    function index()
    {
        // chek_session();
        check_not_login();
        // $data['record'] =  $this->model_operator->tampildata();
        // return $this->db->get('operator');
        //$this->load->view('operator/lihat_data',$data);
        $this->template->load('template', 'absensisiswa');
    }
    public function absen()
    {
        // if (@$this->uri->segment(3)) {
        //     $keterangan = ucfirst($this->uri->segment(3));
        // } else {
        //     $absen_harian = $this->absensi->absen_harian_user($this->session->id_user)->num_rows();
        //     $keterangan = ($absen_harian < 2 && $absen_harian < 1) ? 'Masuk' : 'Pulang';
        // }

        // $data = [
        //     'tgl' => date('Y-m-d'),
        //     'waktu' => date('H:i:s'),
        //     'keterangan' => $keterangan,
        //     'id_user' => $this->session->id_user
        // ];
        // $result = $this->absensi->insert_data($data);
        // if ($result) {
        //     $this->session->set_flashdata('response', [
        //         'status' => 'success',
        //         'message' => 'Absensi berhasil dicatat'
        //     ]);
        // } else {
        //     $this->session->set_flashdata('response', [
        //         'status' => 'error',
        //         'message' => 'Absensi gagal dicatat'
        //     ]);
        // }
        // redirect('absensi/detail_absensi');
    }

    function non_aktif()
    {
         $this->load->model('model_absen');
       print_r($this->model_absen->none());   
    }

    function otomatis_absen()
    {
        $notif = "<script>
            alert('Absen Berhasil');
            window.location='" . site_url('siswa') . "';
            </script>";       
        $message = $this->session->flashdata('message'); 

        date_default_timezone_set('Asia/Jakarta');
        $id = $this->input->post('id', true);
        $nama =$this->fungsi->user_login()->name;
        $kelas = $this->input->post('kelas', true);
        $tanggal = date("Y-m-d");
        $jam = date("H:i:s");
        $status = ('menunggu');
        $disable = 'disabled';
        $disable_in['dis'] = array('disabled' => $disable);

        $data = array(
            'nis' => $id,
            'nama' => $nama,
            'id_kelas' => $kelas,
            'id_tanggal' => $tanggal,
            'jam_masuk' => $jam,
            'st_jam_msk' => $status
        );
        $absen =  $this->db->insert('data_absen', $data);
        $disable_in;
        // echo '<div class="alert alert-success" role="alert">'. $message .'</div>';
        // $this->session->unset_userdata('message');
        echo $notif;
        
              

    }

    function Konfirmasi()
    {
    
        $id =  $this->uri->segment(3);
       
        $data = array(
            'st_jam_msk' => "Dikonfirmasi"
        );
        $this->db->where("id_absen",$id);
        $this->db->update("data_absen",$data);
        redirect('absensi');
    }

    function Tolak()
    {
        $id =  $this->uri->segment(3);
       
        $data = array(
            'st_jam_msk' => "Ditolak"
        );
        $this->db->where("id_absen",$id);
        $this->db->update("data_absen",$data);
        redirect('absensi');
    }

}
