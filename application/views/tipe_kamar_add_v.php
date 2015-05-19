<div class="row">
        <div class="span12">
            <h1 class="h1-about">Add<b>Tipe Kamar</b></h1>
        </div>
</div>

<div class="row">
    <div class="col-lg-6">
		<form action="" method="post" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label>Kode</label>
                <input class="form-control" name="kd_tipe_kamar" placeholder="Masukkan Kode" required>
            </div>
			<div class="form-group">
                <label>Tipe Kamar</label>
                <input class="form-control" name="nama_tipe_kamar" placeholder="Masukkan Nama Tipe Kamar" required>
            </div>
			<div class="form-group">
                <label>Harga</label>
                <input class="form-control" name="harga" placeholder="Masukkan Harga" required>
            </div>
			<div class="form-group">
                <label>Keterangan</label>
                <input class="form-control" name="keterangan" placeholder="Masukkan Keterangan" required>
            </div>
			<div class="form-group">
                <label>File input</label>
                <input type="file" name="fupload">
            </div>
			<input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan">
		</form>
	</div>
</div>