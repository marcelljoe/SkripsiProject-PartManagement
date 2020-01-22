<?php
/**
* 
*/
class Model_Akun extends CI_Model
{

	function tampil_data()
	{
		return $this->db->get('user');
	}

	function post ($data)
	{
		$this->db->insert('user',$data);
	}

	function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('user');
	}

	function edit($data, $id){
		$this->db->where('id',$id);
		$this->db->update('user',$data);
	}

	function get_one($id){

		$param	= array('id'=>$id);

		return $this->db->get_where('user',$param); 
	}
}