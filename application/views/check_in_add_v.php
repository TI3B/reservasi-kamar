<div class="row">
        <div class="span12">
            <h1 class="h1-about">Check<b>In</b></h1>
        </div>
</div>

<div class="row">
    <div class="col-lg-6">
		<form action="" method="post" role="form" enctype="multipart/form-data">
		<?php foreach($booking as $data) { ?>
            <div class="form-group">
                <label>Kode Check In</label>
                <input class="form-control" name="kd_check_in" value="<?php echo $kode; ?>" readonly>
            </div>
            <div class="form-group">
                <label>Kode Kamar</label>
                <input class="form-control" name="kd_kamar" value="<?php echo $data->kd_kamar ?>" readonly>
            </div>
			<div class="form-group">
				<label>Kode Penginap</label>
				<input class="form-control" name="kd_data_penginap" value="<?php echo $data->kd_data_penginap ?>" readonly>
			</div>
            <div class="form-group">
                <label>Tanggal Check Out</label>
                <input class="form-control" name="tanggal_check_out" value="<?php echo $data->tanggal_check_out ?>" readonly>
            </div>
            <div class="form-group">
                <label>Sisa bayar</label>
                <input class="form-control" name="sisabayar" id="sisabayar" value="<?php echo $sisa ?>" readonly>
            </div>
            <div class="form-group">
                <label>Bayar</label>
                <input class="form-control" name="bayar_checkin" id="bayar_checkin" placeholder="Jumlah yang di Bayar">
            </div>
            <div class="form-group">
                <label>Kembali</label>
                <input class="form-control" name="kembali_checkin" id="kembali_checkin" readonly>
            </div>
        <?php
        }
        ?>
			<input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan">
		</form>
	</div>
</div>