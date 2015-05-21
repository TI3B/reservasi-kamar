<div class="row">
        <div class="span12">
            <h1 class="h1-about">Check<b>In</b></h1>
        </div>
</div>

<div class="row">
    <div class="col-lg-6">
		<form action="" method="post" role="form" enctype="multipart/form-data">
		<?php foreach($check_in as $data) { ?>
            <div class="form-group">
                <label>Kode Check Out</label>
                <input class="form-control" name="kd_check_out" value="<?php echo $kode; ?>" readonly>
            </div>
            <div class="form-group">
                <label>Kode Check In</label>
                <input class="form-control" name="kd_check_in" value="<?php echo $data->kd_check_in ?>" readonly>
            </div>
        <?php
        }
        ?>
			<input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan">
		</form>
	</div>
</div>