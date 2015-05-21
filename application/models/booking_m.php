<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Booking_m extends CI_Model
{
	
  function getKodeBooking()
  {
    $q = $this->db->query("select MAX(RIGHT(kd_booking_kamar,3)) as kd_max from tb_booking_kamar");
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
    return "BK-".$kd;
  }

  function getAllDataPenginap()
  {
    $query = $this->db->query('SELECT kd_data_penginap, nama_penginap FROM tb_data_penginap');
    return $query->result();
  }

  function selectAll()
  {
    $query = $this->db->get('tb_booking_kamar');
    if ($query->num_rows()>0)
    {
      return $query->result();
    }
    else
    {
      return array();
    }
  }

  function selectByKdKamar($id)
  {
    $query = "SELECT * FROM tb_kamar where kd_kamar='$id'";
	$db=$this->db->query($query);
	return $db->result();
  }

  function selectByStatus($status)
  {
  $query = "SELECT * FROM tb_kamar where status='$status'";
  $db=$this->db->query($query);
  return $db->result();
  }

  function selectByKdKamarBooking($id)
  {
    $query = "SELECT * FROM tb_booking_kamar where kd_kamar='$id'";
  $db=$this->db->query($query);
  return $db->result();
  }

  function selectBy($id)
  {
    $query = "SELECT * FROM tb_booking_kamar where kd_booking_kamar='$id'";
  $db=$this->db->query($query);
  return $db->result();
  }

  function selectByField($field, $data)
  {
    $query = "SELECT * FROM tb_booking_kamar where $field = '$data'";
  $db=$this->db->query($query);
  return $db->result();
  }

  function jumlahTipeKamar($kd_kamar)
  {
    $query = "SELECT * FROM tb_booking_kamar where kd_kamar = '$kd_kamar'";
    $db = $this->db->query($query);
    return $db->num_rows();
  }

  function insert($data)
  {
    $query = $this->db->insert('tb_booking_kamar', $data);
    return $query;
  }

  function update($data, $id)
  {
    $this->db->where('kd_kamar', $id);
    $query = $this->db->update('tb_booking_kamar', $data);
    return $query;
  }
  
  function delete($id)
  {
    $this->db->where('kd_booking_kamar', $id);
    $query = $this->db->delete('tb_booking_kamar');
    return $query;
  }

}