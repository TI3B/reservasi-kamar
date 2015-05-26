<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('booking_m');
		$this->load->model('kamar_m');
		$this->load->model('tipe_kamar_m');
	}

	public function index()
	{
		$tipe_kamar = $this->tipe_kamar_m->selectAll();
		$data['data'] = "<script type=\"text/javascript\">
    var chart1; // globally available
	$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'grafik',
            type: 'column'
         },   
         title: {
            text: 'Grafik Booking '
         },
         xAxis: {
            categories: ['nama_tipe']
         },
         yAxis: {
            title: {
               text: 'Jumlah'
            }
         },
              series:             
            [";

		$tipe_kamar = $this->tipe_kamar_m->selectAll();
		foreach ($tipe_kamar as $row)
		{
			$jumlah = 0;
			$kd_tipe_kamar = $row->kd_tipe_kamar;
			$nama_tipe_kamar = $row->nama_tipe_kamar;
			$kamar = $this->kamar_m->selectByField('kd_tipe_kamar', $kd_tipe_kamar);
			foreach ($kamar as $row)
			{
				$kd_kamar = $row->kd_kamar;
				$booking = $this->booking_m->selectAll();
				foreach ($booking as $row)
				{
					if ($kd_kamar == $row->kd_kamar)
					{
						$jumlah++;
					}
				}
				
			}
			$data['data'] .= "
				{
					name: '$nama_tipe_kamar',
					data: [$jumlah]
				},
				";
		}
		$data['data'] .= " ]
      });
   });  
</script>";

		$d['title'] = 'Dashboard';
		$this->load->view('header_v', $d);
		$this->load->view('dashboard_v', $data);
		$this->load->view('footer_v');		
	}

}
