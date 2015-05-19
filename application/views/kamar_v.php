			<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Kamar
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Kamar
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
						<a href="<?php echo base_url(); ?>kamar/add"><button type="button" class="btn btn-success">Tambah</button></a>
						<br /><br />
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama Kamar</th>
                                        <th>Tipe</th>
										<th>Status</th>
										<th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
										$no = 1;
										foreach ($kamar_m as $data)
										{
											echo"<tr>
													<td>$data->kd_kamar.</td>
													<td>$data->nama_kamar</td>
													<td>$data->kd_tipe_kamar</td>
													<td>$data->status</td>
													<td><a href='".base_url()."kamar/edit/$data->kd_kamar'><button type='button' class='btn btn-sm btn-warning'>Ubah</button></a> <a href='".base_url()."kamar/delete/$data->kd_kamar'><button type='button' class='btn btn-sm btn-danger'>Hapus</button></a></td>
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