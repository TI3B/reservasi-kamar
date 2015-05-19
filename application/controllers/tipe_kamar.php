<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Tipe_kamar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('tipe_kamar_m');
	}

	public function index()
	{
		$data['tipe_kamar_m'] = $this->tipe_kamar_m->selectAll();
		$d['title'] = 'Tipe Kamar';
		$this->load->view('header_v', $d);
		$this->load->view('tipe_kamar_v', $data);
		$this->load->view('footer_v');		
	}

	public function add()
	{
		if ($this->input->post('add'))
		{
			$lokasi_file    = $_FILES['fupload']['tmp_name'];
				$tipe_file      = $_FILES['fupload']['type'];
				$nama_file      = $_FILES['fupload']['name'];
				$acak           = rand(1,99999);
				$nama_file_unik = $acak.$nama_file ;

			$data = array('kd_tipe_kamar' => $this->input->post('kd_tipe_kamar')
						 ,'nama_tipe_kamar' => $this->input->post('nama_tipe_kamar')
						 ,'harga' => $this->input->post('harga')
						 ,'keterangan' => $this->input->post('keterangan')
						 ,'foto' => $nama_file_unik);

			$vdir_upload = "asset/images/";
						$vfile_upload = $vdir_upload.$nama_file_unik;
						//Simpan file dalam ukuran sebenarnya
						move_uploaded_file($lokasi_file, $vfile_upload);

			$this->tipe_kamar_m->insert($data);
			echo "<script>alert('Proses Input Data Berhasil :)'); window.location = '".base_url()."tipe_kamar'</script>";
		}
		$d['title'] = 'Tambah Tipe Kamar';
		$this->load->view('header_v', $d);
		$this->load->view('tipe_kamar_add_v');
		$this->load->view('footer_v');	
	}
	
	public function edit($id)
	{
		if ($this->input->post('edit'))
		{
			$lokasi_file    = $_FILES['fupload']['tmp_name'];
				$tipe_file      = $_FILES['fupload']['type'];
				$nama_file      = $_FILES['fupload']['name'];
				$acak           = rand(1,99999);
				$nama_file_unik = $acak.$nama_file ;

			
			$data = array('nama_tipe_kamar' => $this->input->post('nama_tipe_kamar')
						 ,'harga' => $this->input->post('harga')
						 ,'keterangan' => $this->input->post('keterangan')
						 ,'foto' => $nama_file_unik);

			$vdir_upload = "asset/images/";
						$vfile_upload = $vdir_upload.$nama_file_unik;
						//Simpan file dalam ukuran sebenarnya
						move_uploaded_file($lokasi_file, $vfile_upload);

			$this->tipe_kamar_m->update($data,$id);
			echo "<script>alert('Proses Edit Data Berhasil :)'); window.location = '".base_url()."tipe_kamar'</script>";
		}
		$data['selectBy'] = $this->tipe_kamar_m->selectBy($id);
		$d['title'] = 'Tambah Tipe Kamar';
		$this->load->view('header_v', $d);
		$this->load->view('tipe_kamar_edit_v', $data);
		$this->load->view('footer_v');	
	}
	
	function delete($id){
		$this->tipe_kamar_m->delete($id);
		redirect(base_url().'tipe_kamar/');
	}
}
