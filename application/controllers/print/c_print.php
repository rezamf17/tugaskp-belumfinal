<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Print extends CI_Controller {

 	public function __construct()
    {
        parent::__construct();
        $this->load->model('model_absen');
    }
	public function index()
	{
		$tgl = date('id_tanggal');
		$this->load->model('model_absen');
		$data['absen'] = $this->model_absen->get();
		//print_r($data);
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-absen.pdf";
		$this->pdf->load_view('print/v_print', $data);
	}

	public function date()
	{
		$start = $this->input->get('startdate', true);
		$end = $this->input->get('enddate', true);
		$range = array($start, $end);
		$this->load->model('model_absen');
		$data['absen'] = $this->model_absen->fill($range);
		//print_r($range);
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-absen.pdf";
		$this->pdf->load_view('print/v_print', $data);
	}

	public function x()
	{
		$this->load->model('model_absen');
		$data['absen'] = $this->model_absen->Xprint();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-absen.pdf";
		$this->pdf->load_view('print/v_print', $data);
	}

	public function xi()
	{
		$this->load->model('model_absen');
		$data['absen'] = $this->model_absen->XIprint();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-absen.pdf";
		$this->pdf->load_view('print/v_print', $data);
	}

	public function xii()
	{
		$this->load->model('model_absen');
		$data['absen'] = $this->model_absen->XIIprint();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-absen.pdf";
		$this->pdf->load_view('print/v_print', $data);
	}
}