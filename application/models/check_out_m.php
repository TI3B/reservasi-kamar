<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Check_out_m extends CI_Model
{
	
  function getKodeCheckOut()
  {
    $q = $this->db->query("select MAX(RIGHT(kd_check_out,3)) as kd_max from tb_check_out");
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
    return "CKO-".$kd;
  }

  function selectAll()
  {
    $query = $this->db->get('tb_check_out');
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
    $query = "SELECT * FROM tb_check_out where kd_check_out='$id'";
  $db=$this->db->query($query);
  return $db->result();
  }

  function insert($data)
  {
    $query = $this->db->insert('tb_check_out', $data);
    return $query;
  }

  function delete($id)
  {
    $this->db->where('kd_check_out', $id);
    $query = $this->db->delete('tb_check_out');
    return $query;
  }

}