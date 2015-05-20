<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//perubahan pada getKodeKamar
class Kamar_m extends CI_Model
{

  function getKodeKamar()
  {
    $q = $this->db->query("select MAX(RIGHT(kd_kamar,3)) as kd_max from tb_kamar");
    $kd = "";
    if($q->num_rows()>0)
    {
      foreach($q->result() as $k)
      {
        $tmp = ((int)$k->kd_max)+1;
        $kd = sprintf("%03s", $tmp);
      }
    }
    else
    {
      $kd = "001";
    }
    return "KM-".$kd;
  }

	function getAllTipeKamar()
  {
    $query = $this->db->query('SELECT kd_tipe_kamar,nama_tipe_kamar FROM tb_tipe_kamar');
    return $query->result();
  }
		
  function selectAll()
  {
    $query = $this->db->get('tb_kamar');
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
    $query = "SELECT * FROM tb_kamar where kd_kamar='$id'";
	$db=$this->db->query($query);
	return $db->result();
  }

  function selectByField($field, $data)
  {
    $query = "SELECT * FROM tb_kamar where $field = '$data'";
  $db=$this->db->query($query);
  return $db->result();
  }

  function insert($data)
  {
    $query = $this->db->insert('tb_kamar', $data);
    return $query;
  }

  function update($data, $id)
  {
    $this->db->where('kd_kamar', $id);
    $query = $this->db->update('tb_kamar', $data);
    return $query;
  }

  function delete($id)
  {
    $this->db->where('kd_kamar', $id);
    $query = $this->db->delete('tb_kamar');
    return $query;
  }

}