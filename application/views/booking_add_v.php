<div class="row">
        <div class="span12">
            <h1 class="h1-about">Add<b>Booking</b></h1>
        </div>
</div>

<div class="row">
    <div class="col-lg-6">
		<form action="" method="post" role="form" enctype="multipart/form-data">
		    <div class="form-group">
                <label>Kode Booking</label>
                <input class="form-control" name="kd_booking_kamar" value="<?php echo $kode; ?>" readonly>
            </div>
            <div class="form-group">
                <label>Kode Kamar</label>
                <input class="form-control" name="kd_kamar" value="<?php echo $kodeKamar; ?>" readonly>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input class="form-control" name="harga" id="harga" value="<?php echo $harga; ?>" readonly>
            </div>
			<div class="form-group">
                <label>Penginap</label>
                <input class="form-control" name="kd_data_penginap" placeholder="Kode Penginap">
                <!-- <select class="form-control" name="kd_data_penginap">
                    <option value="">-Pilih Penginap-</option>
                <?php 
                    //foreach($dropdown as $row)
                    { 
                        //echo '<option value="'.$row->kd_data_penginap.'">'.$row->nama_penginap.'</option>';
                    }
                ?>
                </select> -->
            </div>
            <div class="form-group">
                <label>Tanggal Check In</label>
                <div class="input-group date form_date col-md-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
					<input class="form-control" size="16" type="text" name="tanggal_check_in" id="tanggal_checkin">
						<span class="input-group-addon"><span class="glyphicon glyphicon-remove" ></span></span>
						<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				</div>
            </div>
            <div class="form-group">
                <label>Tanggal Check Out</label>
                <div class="input-group date form_date col-md-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" name="tanggal_check_out" id="tanggal_checkout">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove" ></span></span>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
              <button type="button" onClick="hitungSelisihTanggal();" class="btn btn-sm btn-primary"> Hitung </button>

            <div class="form-group">
                <label>Durasi</label>
                <input class="form-control" type="text" name="durasi" id="durasi" readonly>
            </div>
            <div class="form-group">
                <label>Total Bayar</label>
                <input class="form-control" type="text" name="total" id="total" readonly>
            </div>
            <div class="form-group">
                <label>Uang Muka</label>
                <input class="form-control" type="text" name="bayar" id="bayar" placeholder="Jumlah yang di Bayar">
            </div>
            <div class="form-group">
                <label>Kembali</label>
                <input class="form-control" type="text" name="kembali" id="kembali" readonly>
            </div>
			<input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan">
		</form>
	</div>
</div>