<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Check_out extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('kamar_m');
		$this->load->model('check_in_m');
		$this->load->model('check_out_m');
	}

	public function index()
	{
		$data['check_out_m'] = $this->check_out_m->selectAll();
		$d['title'] = 'Check Out';
		$this->load->view('header_v', $d);
		$this->load->view('check_out_v', $data);
		$this->load->view('footer_v');		
	}

	public function add($id)
	{
		if ($this->input->post('add'))
		{
			$data2['status'] = 'Sudah';
			$this->check_in_m->update($data2,$id);

			$check_in = $this->check_in_m->selectBy($id);
			foreach ($check_in as $row)
			{
				$kd_kamar = $row->kd_kamar;
				$data1['status'] = 'Kosong';
				$this->kamar_m->update($data1,$kd_kamar);
			}

			$data3 = array('kd_check_out' => $this->input->post('kd_check_out')
						 ,'kd_check_in' => $this->input->post('kd_check_in'));

			$this->check_out_m->insert($data3);

			echo "<script>alert('Proses Check Out Berhasil :)'); window.location = '".base_url()."check_out'</script>";
		}
		$data['check_in'] = $this->check_in_m->selectBy($id);
		$data['kode'] = $this->check_out_m->getKodeCheckOut();
		$d['title'] = 'Check Out';
		$this->load->view('header_v', $d);
		$this->load->view('check_out_add_v',$data);
		$this->load->view('footer_v');	
	}
}
