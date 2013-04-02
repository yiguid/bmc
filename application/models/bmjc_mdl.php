<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class BMJC_mdl extends CI_Model {

	public function __construct()
	{
		parent:: __construct();
	}
	
	//添加
	public function addbmjc($data)
	{
		$this->db->insert('bmjc',$data);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}


	//获取
	public function getbmjclist()
	{
		$this->db->select('*');
		$this->db->from('bmjc');
		$query = $this->db->get();
		return $query->result();
	}

	public function getbmjc($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get('bmjc');
		return $query->row();
	}

	//删除
	public function deletebmjc($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('bmjc');
		return TRUE;
	}

	//修改
	public function updatebmjc($id, $data)
	{
		$this->db->where('id',$id);
		$this->db->update('bmjc',$data);
		return TRUE;
	}
}
?>