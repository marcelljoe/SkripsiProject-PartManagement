<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'PT. GALIH AYOM PARAMESTI',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'FORM RETUR BARANG',0,1,'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(27,6,'Nomor Part',1,0);
        $pdf->Cell(35,6,'Nama Part',1,0);
        $pdf->Cell(45,6,'Supplier',1,0);
        $pdf->Cell(20,6,'Jumlah',1,0);
        $pdf->Cell(20,6,'Kondisi',1,0);
		$pdf->Cell(35,6,'Keterangan',1,1);

        $pdf->SetFont('Arial','',10);

        $data = $this->db->get('data_barang')->result();
        foreach ($data as $row){
            $pdf->Cell(27,6,$row->no_part,1,0);
            $pdf->Cell(35,6,$row->nama_part,1,0);
            $pdf->Cell(45,6,$row->supplier,1,0);
            $pdf->Cell(20,6,$row->jumlah,1,0);
            $pdf->Cell(20,6,$row->keputusan,1,0);
			$pdf->Cell(35,6,$row->keterangan,1,1);
        }

        $pdf->Output();
    }
}