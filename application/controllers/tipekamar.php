<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Tipekamar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('tipekamar_m');
	}

	function index()
	{
		/*$tipekamar = $this->tipekamar_m->selectAll();
		$data['data'] = "";
		$no = 1;
		foreach ($tipekamar as $row)
		{
				$data['data'] .= "<tr>
	                <td>$no.</td>
	                <td>$row->nama_tipe_kamar</td>
	                <td>$row->harga</td>
	                <td>$row->keterangan</td>
	            </tr>";
	            $no++;
		}
        */
		
		$data['title'] = 'Tipe Kamar';
		$this->load->view('header_v',$data);
		
	}

	public function add()
	{
		if ($this->input->post('add'))
		{
			$data = array('nama_tipe_kamar' => $this->input->post('judul_buku')
						 ,'harga' => $this->input->post('tahun')
						 ,'pengarang' => $this->input->post('pengarang')
						 ,'keterangan' => $this->input->post('penerbit')
						 );

			$this->tipekamar_m->insert($data);
			echo "<script>alert('Proses Input Data Berhasil :)'); window.location = '".base_url()."judul_buku'</script>";
		}
		$data['title'] = 'Tipe Kamar';
		$this->load->view('header_v');
		//$this->load->view($data);
		//$this->load->view('footer_v');
	}
}
