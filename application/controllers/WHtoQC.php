<?php
/**
* 
*/
class WHtoQC extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('model_barang');
	}
	
	function index()
	{
		check_not_login();
		$data['record'] = $this->model_barang->tampil_data_unchecked();
		$this->load->view('templates/template_header');
		$this->load->view('barangQC/lihat_data',$data);
		//$this->template->publish();
		$this->load->view('templates/template_footer');
	}


	function post(){

		if (isset($_POST['submit'])) {

			$tgl_sampai		= 	$this->input->post('tgl_sampai');
			$supplier		= 	$this->input->post('supplier');
			$no_part		=	$this->input->post('no_part');
			$nama_part		=	$this->input->post('nama_part');
			$isi_per_pack	= 	$this->input->post('isi_per_pack');
			$jumlah			= 	$this->input->post('jumlah');
			$tgl_cek		=	$this->input->post('tgl_cek');
			$keputusan		=	$this->input->post('keputusan');
			$status_p		=	$this->input->post('status_p');
			
			$data 			=	array('tgl_sampai'=> $tgl_sampai,
										'supplier'=> $supplier,
										'no_part'=> $no_part,
										'nama_part'=> $nama_part,
										'isi_per_pack'=> $isi_per_pack,
										'jumlah'=> $jumlah,
										'tgl_cek'=> $tgl_cek,
										'keputusan'=> $keputusan,
										'status_p'=> $status_p
										);
			
			$this->model_barang->post($data);
			redirect('whtoqc');
		}
		else {
			
			$this->load->view('barangqc/form_input');
			$this->template->publish();
		}
	}

	function editOK(){
		if (isset($_POST['submit'])) {

			$no_part		=	$this->input->post('no_part');
			$nama_part		=	$this->input->post('nama_part');
			$tgl_cek		=	$this->input->post('tgl_cek');
			$keputusan		=	$this->input->post('keputusan');
			$status_p		=	$this->input->post('status_p');
			$id				= 	$this->input->post('id');
			$diameter_all	= 	$this->input->post('diameter_all');
			$jarak			= 	$this->input->post('jarak');
			$panjang		= 	$this->input->post('panjang');
			$kehalusan		= 	$this->input->post('kehalusan');
			$penampilan		= 	$this->input->post('penampilan');			


			$data 			=	array(	'no_part'=> $no_part,
										'nama_part'=> $nama_part,
										'tgl_cek'=> $tgl_cek,
										'keputusan'=> $keputusan,
										'status_p'=> $status_p,
										'id'=> $id
										);

			$data2			= 	array(	'no_part'=> $no_part,
										'diameter_all'=> $diameter_all,
										'jarak'=> $jarak,
										'panjang'=> $panjang,
										'kehalusan'=> $kehalusan,
										'penampilan'=> $penampilan
										);
			
			$this->model_barang->edit($data, $id);
			$this->model_barang->post_detail($data2);
			redirect('whtoqc');
		}
		else {
			$id=	$this->uri->segment(3);
			$this->load->model('model_barang');
			$data['barangqc']=	$this->model_barang->tampil_data()->result();
			$data['record']=	$this->model_barang->get_one($id)->row_array();
			$this->load->view('barangqc/form_setOK',$data);
			//$this->template->publish();
			
		}
	}

	function editNG(){
		if (isset($_POST['submit'])) {

			$no_part		=	$this->input->post('no_part');
			$nama_part		=	$this->input->post('nama_part');
			$tgl_cek		=	$this->input->post('tgl_cek');
			$keputusan		=	$this->input->post('keputusan');
			$status_p		=	$this->input->post('status_p');
			$id				= 	$this->input->post('id');
			$diameter_all	= 	$this->input->post('diameter_all');
			$jarak			= 	$this->input->post('jarak');
			$panjang		= 	$this->input->post('panjang');
			$kehalusan		= 	$this->input->post('kehalusan');
			$penampilan		= 	$this->input->post('penampilan');			
			$keterangan 	= 	$this->input->post('keterangan');

			$data 			=	array(	'no_part'=> $no_part,
										'nama_part'=> $nama_part,
										'tgl_cek'=> $tgl_cek,
										'keputusan'=> $keputusan,
										'status_p'=> $status_p,
										'id'=> $id
										);

			$data2			= 	array(	'no_part'=> $no_part,
										'diameter_all'=> $diameter_all,
										'jarak'=> $jarak,
										'panjang'=> $panjang,
										'kehalusan'=> $kehalusan,
										'penampilan'=> $penampilan
										);

			$data3			=	array(	'no_part'=> $no_part,
										'keterangan'=> $keterangan
										);
			
			$this->model_barang->edit($data, $id);
			$this->model_barang->post_detail($data2);
			$this->model_barang->post_retur($data3);
			redirect('whtoqc');
		}
		else {
			$id=	$this->uri->segment(3);
			$this->load->model('model_barang');
			$data['barangqc']=	$this->model_barang->tampil_data()->result();
			$data['record']=	$this->model_barang->get_one($id)->row_array();
			$this->load->view('barangqc/form_setNG',$data);
			//$this->template->publish();
			
		}
	}

	function edit(){
		if (isset($_POST['submit'])) {

			$tgl_sampai		= 	$this->input->post('tgl_sampai');
			$supplier		= 	$this->input->post('supplier');
			$no_part		=	$this->input->post('no_part');
			$nama_part		=	$this->input->post('nama_part');
			$isi_per_pack	= 	$this->input->post('isi_per_pack');
			$jumlah			= 	$this->input->post('jumlah');
			$tgl_cek		=	$this->input->post('tgl_cek');
			$keputusan		=	$this->input->post('keputusan');
			$status_p		=	$this->input->post('status_p');
			$id				= 	$this->input->post('id');

			$data 			=	array('tgl_sampai'=> $tgl_sampai,
										'supplier'=> $supplier,
										'no_part'=> $no_part,
										'nama_part'=> $nama_part,
										'isi_per_pack'=> $isi_per_pack,
										'jumlah'=> $jumlah,
										'tgl_cek'=> $tgl_cek,
										'keputusan'=> $keputusan,
										'status_p'=> $status_p,
										'id'=> $id
										);
			
			$this->model_barang->edit($data, $id);
			redirect('whtoqc');
		}
		else {
			$id=	$this->uri->segment(3);
			$this->load->model('model_barang');
			$data['barangqc']=	$this->model_barang->tampil_data()->result();
			$data['record']=	$this->model_barang->get_one($id)->row_array();
			$this->load->view('barangqc/form_edit',$data);
			//$this->template->publish();
			
		}
	}
}