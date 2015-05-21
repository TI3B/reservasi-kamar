<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Booking extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('tipe_kamar_m');
		$this->load->model('kamar_m');
		$this->load->model('booking_m');
	}

	public function index()
	{
		$status = 'Kosong';
		$data['booking_m'] = $this->booking_m->selectByStatus($status);
		$d['title'] = 'Booking';
		$this->load->view('header_v', $d);
		$this->load->view('booking_kamar_v', $data);
		$this->load->view('footer_v');		
	}

	public function view()
	{
		$data['booking_m'] = $this->booking_m->selectAll();
		$d['title'] = 'Booking';
		$this->load->view('header_v', $d);
		$this->load->view('booking_v', $data);
		$this->load->view('footer_v');		
	}

	public function add($id)
	{
		if ($this->input->post('add'))
		{
			$data = array('status' => 'Book');
			$this->kamar_m->update($data,$id);

			$data2 = array('kd_booking_kamar' => $this->input->post('kd_booking_kamar')
						 ,'kd_kamar' => $this->input->post('kd_kamar')
						 ,'kd_data_penginap' => $this->input->post('kd_data_penginap')
						 ,'tanggal_booking' => $this->input->post('tanggal_booking')
						 ,'tanggal_check_in' => $this->input->post('tanggal_check_in')
						 ,'tanggal_check_out' => $this->input->post('tanggal_check_out')
						 ,'total' => $this->input->post('total')
						 ,'bayar' => $this->input->post('bayar')
						 ,'status' => 'Belum');

			$this->booking_m->insert($data2);

			echo "<script>alert('Proses Booking Berhasil :)'); window.location = '".base_url()."booking/view'</script>";
		}

		$kamar = $this->kamar_m->selectBy($id);
		foreach ($kamar as $row)
		{
			$kd_tipe_kamar = $row->kd_tipe_kamar;
			$tipe_kamar = $this->tipe_kamar_m->selectBy($kd_tipe_kamar);
			foreach($tipe_kamar as $row)
			{
				$harga = $row->harga;
			}
		}

		$data['kode'] = $this->booking_m->getKodeBooking();
		$data['dropdown'] = $this->booking_m->getAllDataPenginap();
		$data['kodeKamar'] = $id;
		$data['harga'] = $harga;
		$d['title'] = 'Booking';
		$this->load->view('header_v', $d);
		$this->load->view('booking_add_v',$data);
		$this->load->view('footer_v');	
	}
	
	function delete($id){
		$this->kamar_m->delete($id);
		redirect(base_url().'kamar/');
	}
}
