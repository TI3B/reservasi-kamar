<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>asset/sb-admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>asset/sb-admin/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>asset/sb-admin/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url(); ?>/asset/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <script src="<?php echo base_url(); ?>/asset/sb-admin/js/grafik/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/asset/sb-admin/js/grafik/highcharts.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/asset/sb-admin/js/time.js" type="text/javascript"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="slimbox2.css" type="text/css" media="screen" /> 
    <script src="<?php echo base_url(); ?>/asset/sb-admin/js/jumlah_otomatis/slimbox2.js" type="text/JavaScript" ></script> 
    <script src="<?php echo base_url(); ?>/asset/sb-admin/js/jumlah_otomatis/jquery-1.6.2.min.js" language="javascript" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/asset/sb-admin/js/jumlah_otomatis/jquery-ui-1.8.16.custom.min.js" language="javascript" type="text/javascript"></script>

    <script type="text/javascript">
     $(document).ready(function(){
    //total
        $('#bayar').bind('keyup',function() {
            var total = $("#total").val();
            var bayar = 0;
            $('#bayar').each(function() {
                if(this.value !='') bayar += parseInt(this.value,10);
            });
            $('#kembali').val(total-bayar);
        });

        $('#bayar_checkin').bind('keyup',function() {
            var sisabayar = $("#sisabayar").val();
            var bayar_checkin = 0;
            $('#bayar_checkin').each(function() {
                if(this.value !='') bayar_checkin += parseInt(this.value,10);
            });
            $('#kembali_checkin').val(bayar_checkin-sisabayar);
        });

    });

    </script> 

    <script language="JavaScript" type="text/javascript">

    function hitungSelisihTanggal() {
     
        if($("#tanggal_checkin").val()!="" && $("#tanggal_checkout").val()!=""){
     
            var tanggal_checkin = new Date($("#tanggal_checkin").val());
            var tanggal_checkout = new Date($("#tanggal_checkout").val());
            var diff_date =  tanggal_checkout - tanggal_checkin;
             
            var years = Math.floor(diff_date/31536000000);
            var months = Math.floor((diff_date % 31536000000)/2628000000);
            var days = Math.floor(((diff_date % 31536000000) % 2628000000)/86400000);
            $("#durasi").val(days);
            //$("#Result").html(years+" year(s) "+months+" month(s) "+days+" and day(s)");


            //hitung total bayar
            var durasi = $("#durasi").val();
            var harga = $("#harga").val();
            $('#total').val(durasi*harga);
        }
        else{
            alert("Anda belum memilih tanggal");
            return false;
        }
    }
    </script>

</head>

<body onload="waktu()">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand" id="waktu">Waktu</span>
            </div>

            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo base_url(); ?>dashboard/"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>tipe_kamar/"><i class="fa fa-fw fa-bar-chart-o"></i> Tipe Kamar</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>kamar/"><i class="fa fa-fw fa-table"></i> Kamar</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>booking/"><i class="fa fa-fw fa-edit"></i> Booking</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>check_in/"><i class="fa fa-fw fa-edit"></i> Check In</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>check_out/"><i class="fa fa-fw fa-edit"></i> Check Out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">