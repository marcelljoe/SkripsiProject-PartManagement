<?php
/**
* 
*/
class Model_barang extends CI_Model
{
	function tampil_data()
	{
		$unsent = "request='Idle'";
		$this->db->where($unsent);
		return $this->db->get('data_barang');
	}

	function tampil_rm()
	{
		$query = $this->db->query('select id_rm from data_rm');
		return $query->result();
	}

	function tampil_supp()
	{
		$query = $this->db->query('select nama_supp from data_supp');
		return $query->result();
	}

	function tampil_data_unchecked()
	{	
		$OKorNG = "keputusan='Unchecked'";
		$this->db->where($OKorNG);
		return $this->db->get('data_barang');
	}

	function tampil_data_checked()
	{	
		$OKorNG = "keputusan!='Unchecked'";
		$this->db->where($OKorNG);
		return $this->db->get('data_barang');
	}

	function tampil_data_unready()
	{	
		$RorNR = "status_p='Unready'";
		$this->db->where($RorNR);
		return $this->db->get('data_barang');
	}

	function tampil_data_ready()
	{	
		$RorNR ="status_p='Ready'";
		$this->db->where($RorNR);
		return $this->db->get('data_barang');
	}

	function tampil_data_OK()
	{	
		$OK = "keputusan='OK' and status_p='Unready'";
		$this->db->where($OK);
		return $this->db->get('data_barang');
	}

	function tampil_data_NG()
	{	
		$NG = "keputusan='NG'";
		$this->db->where($NG);
		return $this->db->get('data_barang');
	}

	function tampil_data_Requested()
	{	
		$yes = "request='Requested'";
		$this->db->where($yes);
		return $this->db->get('data_barang');
	}

	function tampil_data_Sent()
	{	
		$sent = "request='Sent'";
		$this->db->where($sent);
		return $this->db->get('data_barang');
	}

	function post ($data)
	{
		$this->db->insert('data_barang',$data);
	}

	function post_detail ($data2)
	{
		$this->db->insert('data_detail',$data2);
	}

	function tampil_detail($no_part)
	{
		$this->db->where('no_part',$no_part);
		$this->db->get('data_barang',$no_part);
		$this->db->get('data_detail',$no_part);
	}

	function post_retur ($data3)
	{
		$this->db->insert('data_retur',$data3);
	}

	function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('data_barang');
	}

	function delete_retur($no_part)
	{
		$this->db->where('no_part',$no_part);
		$this->db->delete('data_retur');
	}

	function edit($data, $id)
	{
		$this->db->where('id',$id);
		$this->db->update('data_barang',$data);
	}

	function edit_detail($data2, $no_part)
	{
		$this->db->where('no_part',$no_part);
		$this->db->update('data_detail',$data2);
	}

	function get_one($id)
	{
		$param	= array('id'=>$id);
		return $this->db->get_where('data_barang',$param); 
	}

	function get_one_detail($id)
	{
		$param	= array('no_part'=>$id);
		return $this->db->get_where('data_barang',$param); 
	}
	
	function get_detail($id)
	{
		$param	= array('no_part'=>$id);
		return $this->db->get_where('data_detail',$param);
	}

	public function hitungJumlahAsset()
	{
		$query = $this->db->get('data_barang');
		if($query->num_rows()>0)
		{
		  return $query->num_rows();
		}
		else
		{
		  return 0;
		}
	}

	function cetakTag($id)
	{
		$query = "Select no_part, nama_part, jumlah, keputusan, supplier from data_barang where id='".$id."'";
		return $this->db->query($query);
	}
}