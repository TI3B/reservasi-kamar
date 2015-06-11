<div class="row">
        <div class="span12">
            <h1 class="h1-about">Edit<b>Data Penginap</b></h1>
        </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <form action="" method="post" role="form" enctype="multipart/form-data">
        <?php foreach($selectBy as $data) { ?>
            <div class="form-group">
                <label>Kode</label>
                <input class="form-control" name="kd_data_penginap" value="<?php echo $data->kd_data_penginap ?>" readonly>
            </div>
           <div class="form-group">
                <label>NIK</label>
                <input class="form-control" name="NIK" value="<?php echo $data->NIK ?>">
            </div>
            <div class="form-group">
                <label>Nama Penginap</label>
                <input class="form-control" name="nama_penginap" value="<?php echo $data->nama_penginap ?>">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" name="alamat" value="<?php echo $data->alamat ?>">
            </div>
            <div class="form-group">
                <label>No Telepon</label>
                <input class="form-control" name="no_telp" value="<?php echo $data->no_telp ?>">
            </div>
            <div class="form-group">
                <label>File input Foto KTP</label>
                <input type="file" name="fupload">
            </div>
            <input type="submit" name="edit" class="btn btn-sm btn-primary" value="Simpan">
        <?php
        }
        ?>
        </form>
    </div>
</div>