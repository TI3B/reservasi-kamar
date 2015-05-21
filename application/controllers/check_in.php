<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Check_in extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('kamar_m');
		$this->load->model('booking_m');
		$this->load->model('check_in_m');
	}

	public function index()
	{
		$data['check_in_m'] = $this->check_in_m->selectAll();
		$d['title'] = 'Check In';
		$this->load->view('header_v', $d);
		$this->load->view('check_in_v', $data);
		$this->load->view('footer_v');		
	}

	public function add($id)
	{
		if ($this->input->post('add'))
		{
			$data['status'] = 'Sudah';
			$this->booking_m->update($data,$id);

			$data2 = array('kd_check_in' => $this->input->post('kd_check_in')
						 ,'kd_kamar' => $this->input->post('kd_kamar')
						 ,'kd_data_penginap' => $this->input->post('kd_data_penginap')
						 ,'tanggal_check_out' => $this->input->post('tanggal_check_out')
						 ,'status' => 'Belum');

			$this->check_in_m->insert($data2);

			echo "<script>alert('Proses Check In Berhasil :)'); window.location = '".base_url()."check_in'</script>";
		}

		$booking = $this->booking_m->selectByKdKamarBooking($id);
		foreach ($booking as $row) {
			$kd_kamar = $row->kd_kamar;
			$kd_data_penginap = $row->kd_data_penginap;
			$total = $row->total;
			$bayar = $row->bayar;
		}
		$data['booking'] = $this->booking_m->selectByKdKamarBooking($id);
		$data['sisa'] = $total-$bayar;
		$data['kode'] = $this->check_in_m->getKodeCheckIn();
		$d['title'] = 'Check In';
		$this->load->view('header_v', $d);
		$this->load->view('check_in_add_v',$data);
		$this->load->view('footer_v');	
	}
}
