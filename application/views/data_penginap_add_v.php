<div class="row">
        <div class="span12">
            <h1 class="h1-about">Add<b>Data Penginap</b></h1>
        </div>
</div>

<div class="row">
    <div class="col-lg-6">
		<form action="" method="post" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label>Kode</label>
                <input class="form-control" name="kd_data_penginap" value="<?php echo $kode; ?>" readonly>
            </div>
			<div class="form-group">
                <label>Nama Penginap</label>
                <input class="form-control" name="nama_penginap" placeholder="Nama Lengkap" required>
            </div>
			<div class="form-group">
                <label>Alamat</label>
                <input class="form-control" name="alamat" placeholder="Alamat Lengkap" required>
            </div>
			<div class="form-group">
                <label>No Telepon</label>
                <input class="form-control" name="no_telp" placeholder="No Telepon" required>
            </div>
			<input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan">
		</form>
	</div>
</div>