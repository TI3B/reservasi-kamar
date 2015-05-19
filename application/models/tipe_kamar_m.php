<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tipe_kamar_m extends CI_Model
{
  function selectAll()
  {
    $query = $this->db->get('tb_tipe_kamar');
    if ($query->num_rows()>0)
    {
      return $query->result();
    }
    else
    {
      return array();
    }
  }

  function selectBy($id)
  {
    $query = "SELECT * FROM tb_tipe_kamar where kd_tipe_kamar='$id'";
	$db=$this->db->query($query);
	return $db->result();
  }

  function insert($data)
  {
    $query = $this->db->insert('tb_tipe_kamar', $data);
    return $query;
  }

  function update($data, $id)
  {
    $this->db->where('kd_tipe_kamar', $id);
    $query = $this->db->update('tb_tipe_kamar', $data);
    return $query;
  }

  function delete($id)
  {
    $this->db->where('kd_tipe_kamar', $id);
    $query = $this->db->delete('tb_tipe_kamar');
    return $query;
  }

}