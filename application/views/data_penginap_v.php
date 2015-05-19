			<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Data Penginap
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Data Penginap
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
						<a href="<?php echo base_url(); ?>data_penginap/add"><button type="button" class="btn btn-success">Tambah</button></a>
						<br /><br />
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>NIK</th>
                                        <th>Nama Penginap</th>
                                        <th>Alamat</th>
                                        <th>No Telepon</th>
                                        <th>Foto KTP</th>
										<th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
										$no = 1;
										foreach ($data_penginap_m as $data)
										{
											echo"<tr>
													<td>$data->kd_data_penginap</td>
                                                    <td>$data->NIK</td>
													<td>$data->nama_penginap</td>
													<td>$data->alamat</td>
													<td>$data->no_telp</td>
                                                    <td><img src='".base_url()."/asset/images/$data->foto_ktp' width='150'></td>
													<td><a href='".base_url()."data_penginap/edit/$data->kd_data_penginap'><button type='button' class='btn btn-sm btn-warning'>Ubah</button></a> <a href='".base_url()."data_penginap/delete/$data->kd_data_penginap'><button type='button' class='btn btn-sm btn-danger'>Hapus</button></a></td>
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