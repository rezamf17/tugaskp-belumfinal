<?php

	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
	
	class C_Printxls extends CI_Controller{

		public function excel()
		{
			$this->load->model('model_absen');
			$spreadsheet = new Spreadsheet();
			$sheet = $spreadsheet->getActiveSheet();
			$sheet->setCellValue('A1', 'No');
			$sheet->setCellValue('B1', 'Nama');
			$sheet->setCellValue('C1', 'Kelas');
			$sheet->setCellValue('D1', 'Tanggal');
			$sheet->setCellValue('E1', 'Jam');
			$sheet->setCellValue('F1', 'Status');
			
			$absen = $this->model_absen->getAll();
			$no = 1;
			$x = 2;
			foreach($absen as $row)
			{
				$sheet->setCellValue('A'.$x, $no++);
				$sheet->setCellValue('B'.$x, $row->nama);
				$sheet->setCellValue('C'.$x, $row->id_kelas);
				$sheet->setCellValue('D'.$x, $row->id_tanggal);
				$sheet->setCellValue('E'.$x, $row->jam_masuk);
				$sheet->setCellValue('F'.$x, $row->st_jam_msk);
				$x++;
			}
			$writer = new Xlsx($spreadsheet);
			$filename = 'laporan-absen';
			
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
			header('Cache-Control: max-age=0');
	
			$writer->save('php://output');
		}
	}
?>