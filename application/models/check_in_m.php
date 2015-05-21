<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Check_in_m extends CI_Model
{
	
  function getKodeCheckIn()
  {
    $q = $this->db->query("select MAX(RIGHT(kd_check_in,3)) as kd_max from tb_check_in");
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
    return "CKI-".$kd;
  }

  function selectAll()
  {
    $query = $this->db->get('tb_check_in');
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
    $query = "SELECT * FROM tb_check_in where kd_check_in='$id'";
  $db=$this->db->query($query);
  return $db->result();
  }

  function selectByField($id)
  {
    $query = "SELECT * FROM tb_check_in where kd_kamar='$id'";
  $db=$this->db->query($query);
  return $db->result();
  }

  function insert($data)
  {
    $query = $this->db->insert('tb_check_in', $data);
    return $query;
  }

  function update($data, $id)
  {
    $this->db->where('kd_check_in', $id);
    $query = $this->db->update('tb_check_in', $data);
    return $query;
  }

  function delete($id)
  {
    $this->db->where('kd_check_in', $id);
    $query = $this->db->delete('tb_check_in');
    return $query;
  }

}