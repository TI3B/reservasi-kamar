<div class="row">
        <div class="span12">
            <h1 class="h1-about">Add<b>Kamar</b></h1>
        </div>
</div>

<div class="row">
    <div class="col-lg-6">
		<form action="" method="post" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label>Kode</label>
                <input class="form-control" name="kd_kamar" placeholder="Masukkan Kode" required>
            </div>
			<div class="form-group">
				<label>Tipe Kamar</label>
				<select class="form-control" name="kd_tipe_kamar">
				<?php 
					foreach($dropdown as $row)
					{ 
						echo '<option value="'.$row->kd_tipe_kamar.'">'.$row->nama_tipe_kamar.'</option>';
					}
				?>
				</select>
			</div>
			<div class="form-group">
                <label>Nama Kamar</label>
                <input class="form-control" name="nama_kamar" placeholder="Masukkan Harga" required>
            </div>
			<div class="form-group">
                <label>Status</label>
                <input class="form-control" name="status" placeholder="Masukkan Keterangan" required>
            </div>
			<input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan">
		</form>
	</div>
</div>