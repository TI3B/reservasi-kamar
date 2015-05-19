<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kamar_m extends CI_Model
{
	function getAllTipeKamar()
    {
        /*
        $query = $this->db->get('location');
        foreach ($query->result() as $row)
        {
            echo $row->description;
        }*/

        $query = $this->db->query('SELECT kd_tipe_kamar,nama_tipe_kamar FROM tb_tipe_kamar');

        return $query->result();

        //echo 'Total Results: ' . $query->num_rows();
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