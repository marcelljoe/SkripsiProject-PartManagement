<?php
/**
* 
*/
class QCtoWH extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('model_barang');
	}
	
	function indexOK()
	{
		check_not_login();
		$data['record'] = $this->model_barang->tampil_data_OK();
		$this->load->view('templates/template_header');
		$this->load->view('barangqctowh/lihat_dataOK',$data);
		//$this->template->publish();
		$this->load->view('templates/template_footer');
	}

	function indexNG()
	{
		check_not_login();
		$data['record'] = $this->model_barang->tampil_data_NG();
		$this->load->view('templates/template_header');
		$this->load->view('barangqctowh/lihat_dataNG',$data);
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
			redirect('qctowh');
		}
		else {
			
			$this->load->view('barangqctowh/form_input');
			$this->template->publish();
		}
	}

	function editR(){
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
			redirect('qctowh/indexok');
		}
		else {
			$id=	$this->uri->segment(3);
			$this->load->model('model_barang');
			$data['barangqctowh']=	$this->model_barang->tampil_data()->result();
			$data['record']=	$this->model_barang->get_one($id)->row_array();
			$this->load->view('barangqctowh/form_setR',$data);
			//$this->template->publish();
			
		}
	}

	function editNR(){
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
			redirect('qctowh/indexng');
		}
		else {
			$id=	$this->uri->segment(3);
			$this->load->model('model_barang');
			$data['barangqctowh']=	$this->model_barang->tampil_data()->result();
			$data['record']=	$this->model_barang->get_one($id)->row_array();
			$this->load->view('barangqctowh/form_setNR',$data);
			//$this->template->publish();
			
		}
	}

	function cetakTag(){

			$id=	$this->uri->segment(3);
			$data['record'] = $this->model_barang->cetakTag($id);
			$this->load->view('barangqctowh/cetak_Tag',$data);
	}
}