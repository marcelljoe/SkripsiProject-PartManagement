<?php
/**
* 
*/
class Barang extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('model_barang');
		$this->load->model('model_akun');
	}
	
	function index()
	{
		check_not_login();
		$data['record'] = $this->model_barang->tampil_data();
		$data['groups'] = $this->model_barang->tampil_rm();
		$data['supp'] = $this->model_barang->tampil_supp();
		$this->load->view('templates/template_header');
		$this->load->view('barang/lihat_data',$data);
		//$this->template->publish();
		$this->load->view('templates/template_footer');
	}


	function post(){

		if (isset($_POST['submit'])) {

			$tgl_sampai		= 	$this->input->post('tgl_sampai');
			$supplier		= 	$this->input->post('supplier');
			$id_rm			= 	$this->input->post('id_rm');
			$no_part		=	$this->input->post('no_part');
			$nama_part		=	$this->input->post('nama_part');
			$isi_per_pack	= 	$this->input->post('isi_per_pack');
			$jumlah			= 	$this->input->post('jumlah');
			$tgl_cek		=	$this->input->post('tgl_cek');
			$keputusan		=	$this->input->post('keputusan');
			$request		=	$this->input->post('request');

			$data 			=	array('tgl_sampai'=> $tgl_sampai,
										'supplier'=> $supplier,
										'no_part'=> $no_part,
										'id_rm' => $id_rm,
										'nama_part'=> $nama_part,
										'isi_per_pack'=> $isi_per_pack,
										'jumlah'=> $jumlah,
										'tgl_cek'=> $tgl_cek,
										'keputusan'=> $keputusan,
										'request'=> $request
										);
			
			$this->model_barang->post($data);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data berhasil disimpan.');
			}
			redirect('barang');
			$data['total_asset'] = $this->model_barang->hitungJumlahAsset();
		}
		else {
			$this->load->view('templates/template_header');
			$this->load->view('barang/form_input');
			$this->load->view('templates/template_footer');
		}
	}

	public function delete (){
		$id=	$this->uri->segment(3);
		$this->model_barang->delete($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data berhasil dihapus.');
		}
		redirect('barang');
	}

	public function edit (){
		if (isset($_POST['submit'])) {

			$tgl_sampai		= 	$this->input->post('tgl_sampai');
			$supplier		= 	$this->input->post('supplier');
			$id_rm			= 	$this->input->post('id_rm');
			$no_part		=	$this->input->post('no_part');
			$nama_part		=	$this->input->post('nama_part');
			$isi_per_pack	= 	$this->input->post('isi_per_pack');
			$jumlah			= 	$this->input->post('jumlah');
			$tgl_cek		=	$this->input->post('tgl_cek');
			$keputusan		=	$this->input->post('keputusan');
			$id				=	$this->input->post('id');

			$data 			=	array('tgl_sampai'=> $tgl_sampai,
										'supplier'=> $supplier,
										'id_rm'=> $id_rm,
										'no_part'=> $no_part,
										'nama_part'=> $nama_part,
										'isi_per_pack'=> $isi_per_pack,
										'jumlah'=> $jumlah,
										'tgl_cek'=> $tgl_cek,
										'keputusan'=> $keputusan,
										'id'=> $id
										);
			
			$this->model_barang->edit($data, $id);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data berhasil diubah.');
			}
			redirect('barang');
		}
		else {
			$id=	$this->uri->segment(3);
			$this->load->model('model_barang');
			$data['barang']=	$this->model_barang->tampil_data()->result();
			$data['record']=	$this->model_barang->get_one($id)->row_array();
			//$this->load->view('templates/template_header');
			$this->load->view('barang/form_edit',$data);
			//$this->template->publish();
			//$this->load->view('templates/template_footer');
		
		}
	}

	function indexReq()
	{
		check_not_login();
		$data['record'] = $this->model_barang->tampil_data_Requested();
		$this->load->view('templates/template_header');
		$this->load->view('barangOP/lihat_dataReq',$data);
		//$this->template->publish();
		$this->load->view('templates/template_footer');
	}

	function setSent(){
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
			redirect('Barang/indexReq');
		}
		else {
			$id=	$this->uri->segment(3);
			$this->load->model('model_barang');
			$data['barangOP']=	$this->model_barang->tampil_data()->result();
			$data['record']=	$this->model_barang->get_one($id)->row_array();
			$this->load->view('barangOP/form_setSent',$data);
			//$this->template->publish();
			
		}
	}

}