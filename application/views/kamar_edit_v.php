<div class="row">
        <div class="span12">
            <h1 class="h1-about">Edit<b>Kamar</b></h1>
        </div>
</div>

<div class="row">
    <div class="col-lg-6">
		<form action="" method="post" role="form" enctype="multipart/form-data">
		<?php foreach($selectBy as $data) { ?>
            <div class="form-group">
                <label>Kode</label>
                <input class="form-control" name="kd_kamar" value="<?php echo $data->kd_kamar ?>" readonly>
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
                <input class="form-control" name="nama_kamar" value="<?php echo $data->nama_kamar ?>" required>
            </div>
			<div class="form-group">
                <label>Status</label>
                <input class="form-control" name="status" value="<?php echo $data->status ?>" required>
            </div>
			<input type="submit" name="edit" class="btn btn-sm btn-primary" value="Simpan">
		<?php
		}
		?>
		</form>
	</div>
</div>