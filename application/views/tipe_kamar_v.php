			<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tipe Kamar
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tipe Kamar
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
						<a href="<?php echo base_url(); ?>tipe_kamar/add"><button type="button" class="btn btn-success">Tambah</button></a>
						<br /><br />
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Foto</th>
                                        <th>Tipe Kamar</th>
                                        <th>Harga</th>
										<th>Keterangan</th>
										<th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
										$no = 1;
										foreach ($tipe_kamar_m as $data)
										{
											echo"<tr>
													<td>$data->kd_tipe_kamar.</td>
													<td><img src='".base_url()."/asset/images/$data->foto' width='150'></td>
													<td>$data->nama_tipe_kamar</td>
													<td>$data->harga</td>
													<td>$data->keterangan</td>
													<td><a href='".base_url()."tipe_kamar/edit/$data->kd_tipe_kamar'><button type='button' class='btn btn-sm btn-warning'>Ubah</button></a> <a href='".base_url()."tipe_kamar/delete/$data->kd_tipe_kamar'><button type='button' class='btn btn-sm btn-danger'>Hapus</button></a></td>
												</tr>";
												$no++;
										}
									?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->