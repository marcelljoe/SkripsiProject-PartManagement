<?php
/**
* 
*/
class Produksi extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('model_barang');
	}
	
	function indexReady()
	{
		check_not_login();
		$data['record'] = $this->model_barang->tampil_data_Ready();
		$this->load->view('templates/template_header');
		$this->load->view('barangprd/lihat_dataready',$data);
		//$this->template->publish();
		$this->load->view('templates/template_footer');
	}

	function indexReq()
	{
		check_not_login();
		$data['record'] = $this->model_barang->tampil_data_Requested();
		$this->load->view('templates/template_header');
		$this->load->view('barangprd/lihat_datareq',$data);
		//$this->template->publish();
		$this->load->view('templates/template_footer');
	}

	function indexSent()
	{
		check_not_login();
		$data['record'] = $this->model_barang->tampil_data_Sent();
		$this->load->view('templates/template_header');
		$this->load->view('barangprd/lihat_datasent',$data);
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
			$request		=	$this->input->post('request');

			$data 			=	array('tgl_sampai'=> $tgl_sampai,
										'supplier'=> $supplier,
										'no_part'=> $no_part,
										'nama_part'=> $nama_part,
										'isi_per_pack'=> $isi_per_pack,
										'jumlah'=> $jumlah,
										'tgl_cek'=> $tgl_cek,
										'keputusan'=> $keputusan,
										'status_p'=> $status_p,
										'request'=> $request
										);
			
			$this->model_barang->post($data);
			redirect('produksi');
		}
		else {
			
			$this->load->view('barangprd/form_input');
			$this->template->publish();
		}
	}

	function setReq(){
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
			$request		=	$this->input->post('request');
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
										'request'=> $request,
										'id'=> $id
										);
			
			$this->model_barang->edit($data, $id);
			redirect('produksi/indexready');
		}
		else {
			$id=	$this->uri->segment(3);
			$this->load->model('model_barang');
			$data['barangprd']=	$this->model_barang->tampil_data()->result();
			$data['record']=	$this->model_barang->get_one($id)->row_array();
			$this->load->view('barangprd/form_setReq',$data);
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
			redirect('produksi');
		}
		else {
			$id=	$this->uri->segment(3);
			$this->load->model('model_barang');
			$data['barangprd']=	$this->model_barang->tampil_data()->result();
			$data['record']=	$this->model_barang->get_one($id)->row_array();
			$this->load->view('barangprd/form_edit',$data);
			//$this->template->publish();
			
		}
	}
}