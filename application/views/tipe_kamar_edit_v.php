<div class="row">
        <div class="span12">
            <h1 class="h1-about">Edit<b>Tipe Kamar</b></h1>
        </div>
</div>

<div class="row">
    <div class="col-lg-6">
		<form action="" method="post" role="form" enctype="multipart/form-data">
		<?php foreach($selectBy as $data) { ?>
            <div class="form-group">
                <label>Kode</label>
                <input class="form-control" name="kd_tipe_kamar" value="<?php echo $data->kd_tipe_kamar ?>" readonly>
            </div>
			<div class="form-group">
                <label>Tipe Kamar</label>
                <input class="form-control" name="nama_tipe_kamar" value="<?php echo $data->nama_tipe_kamar ?>">
            </div>
			<div class="form-group">
                <label>Harga</label>
                <input class="form-control" name="harga" value="<?php echo $data->harga ?>">
            </div>
			<div class="form-group">
                <label>Keterangan</label>
                <input class="form-control" name="keterangan" value="<?php echo $data->keterangan ?>">
            </div>
			<div class="form-group">
                <label>File input</label>
                <input type="file" name="fupload">
            </div>
			<input type="submit" name="edit" class="btn btn-sm btn-primary" value="Simpan">
		<?php
		}
		?>
		</form>
	</div>
</div>