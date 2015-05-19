<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Kamar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('kamar_m');
	}

	public function index()
	{
		$data['kamar_m'] = $this->kamar_m->selectAll();
		$d['title'] = 'Kamar';
		$this->load->view('header_v', $d);
		$this->load->view('kamar_v', $data);
		$this->load->view('footer_v');		
	}

	public function add()
	{
		if ($this->input->post('add'))
		{
			$data = array('kd_kamar' => $this->input->post('kd_kamar')
						 ,'nama_kamar' => $this->input->post('nama_kamar')
						 ,'kd_tipe_kamar' => $this->input->post('kd_tipe_kamar')
						 ,'status' => $this->input->post('status'));

			$this->kamar_m->insert($data);
			echo "<script>alert('Proses Input Data Berhasil :)'); window.location = '".base_url()."kamar'</script>";
		}
		$data['dropdown'] = $this->kamar_m->getAllTipeKamar();
		$d['title'] = 'Tambah Kamar';
		$this->load->view('header_v', $d);
		$this->load->view('kamar_add_v',$data);
		$this->load->view('footer_v');	
	}
	
	public function edit($id)
	{
		if ($this->input->post('edit'))
		{
			$data = array('nama_kamar' => $this->input->post('nama_kamar')
						 ,'kd_tipe_kamar' => $this->input->post('kd_tipe_kamar')
						 ,'status' => $this->input->post('status'));

			$this->kamar_m->update($data,$id);
			echo "<script>alert('Proses Edit Data Berhasil :)'); window.location = '".base_url()."kamar'</script>";
		}
		$data['dropdown'] = $this->kamar_m->getAllTipeKamar();
		$data['selectBy'] = $this->kamar_m->selectBy($id);
		$d['title'] = 'Tambah Kamar';
		$this->load->view('header_v', $d);
		$this->load->view('kamar_edit_v', $data);
		$this->load->view('footer_v');	
	}
	
	function delete($id){
		$this->kamar_m->delete($id);
		redirect(base_url().'kamar/');
	}
}
