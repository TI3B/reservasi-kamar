			<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Daftar Kamar Kosong
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Dashboard</a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url(); ?>booking/view/"><i class="fa fa-table"></i> Booking</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo base_url(); ?>booking/"><i class="fa fa-table"></i> Daftar Kamar</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama Kamar</th>
                                        <th>Tipe</th>
										<th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
										$no = 1;
										foreach ($booking_m as $data)
										{
											echo"<tr>
													<td>$data->kd_kamar</td>
													<td>$data->nama_kamar</td>
													<td>$data->kd_tipe_kamar</td>
													<td><a href='".base_url()."booking/add/$data->kd_kamar'><button type='button' class='btn btn-sm btn-warning'>Book</button></a></td>
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