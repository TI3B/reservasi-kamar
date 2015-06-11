<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Data_penginap extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('data_penginap_m');
	}

	public function index()
	{
		$data['data_penginap_m'] = $this->data_penginap_m->selectAll();
		$d['title'] = 'Data Penginap';
		$this->load->view('header_v', $d);
		$this->load->view('data_penginap_v', $data);
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
				$nama_file_ktp = $acak.$nama_file ;

			$data = array('kd_data_penginap' => $this->input->post('kd_data_penginap')
						 ,'NIK' => $this->input->post('NIK')
						 ,'nama_penginap' => $this->input->post('nama_penginap')
						 ,'alamat' => $this->input->post('alamat')
						 ,'no_telp' => $this->input->post('no_telp')
						 ,'foto_ktp' => $nama_file_ktp);

			$vdir_upload = "asset/images/";
						$vfile_upload = $vdir_upload.$nama_file_ktp;
						//Simpan file dalam ukuran sebenarnya
						move_uploaded_file($lokasi_file, $vfile_upload);


			$this->data_penginap_m->insert($data);
			echo "<script>alert('Proses Input Data Berhasil :)'); window.location = '".base_url()."data_penginap'</script>";
		}
		$data['kode'] = $this->data_penginap_m->getKodeDataPenginap();
		$d['title'] = 'Tambah Data Penginap';
		$this->load->view('header_v', $d);
		$this->load->view('data_penginap_add_v', $data);
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
				$nama_file_ktp = $acak.$nama_file ;
			
			$data = array('NIK' => $this->input->post('NIK')
						 ,'nama_penginap' => $this->input->post('nama_penginap')
						 ,'alamat' => $this->input->post('alamat')
						 ,'no_telp' => $this->input->post('no_telp')
						 ,'foto_ktp' => $nama_file_ktp);

			$vdir_upload = "asset/images/";
						$vfile_upload = $vdir_upload.$nama_file_ktp;
						//Simpan file dalam ukuran sebenarnya
						move_uploaded_file($lokasi_file, $vfile_upload);

//mencoba mengubah data
			$this->data_penginap_m->update($data,$id);
			echo "<script>alert('Proses Edit Data Berhasil :)'); window.location = '".base_url()."data_penginap'</script>";
		}
		$data['selectBy'] = $this->data_penginap_m->selectBy($id);
		$d['title'] = 'Tambah Data Penginap';
		$this->load->view('header_v', $d);
		$this->load->view('data_penginap_edit_v', $data);
		$this->load->view('footer_v');	
	}
	
	function delete($id){
		$this->data_penginap_m->delete($id);
		redirect(base_url().'data_penginap/');
	}
}
