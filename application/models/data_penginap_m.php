<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_penginap_m extends CI_Model
{

  //penomoran otomatis
  function getKodeDataPenginap()
  {
    $q = $this->db->query("select MAX(RIGHT(kd_data_penginap,3)) as kd_max from tb_data_penginap");
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
    return "PN-".$kd;
  }

  function selectAll()
  {
    $query = $this->db->get('tb_data_penginap');
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
    $query = "SELECT * FROM tb_data_penginap where kd_data_penginap='$id'";
  $db=$this->db->query($query);
  return $db->result();
  }

  function insert($data)
  {
    $query = $this->db->insert('tb_data_penginap', $data);
    return $query;
  }

  function update($data, $id)
  {
    $this->db->where('kd_data_penginap', $id);
    $query = $this->db->update('tb_data_penginap', $data);
    return $query;
  }

  function delete($id)
  {
    $this->db->where('kd_data_penginap', $id);
    $query = $this->db->delete('tb_data_penginap');
    return $query;
  }

}