			<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Check In
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Dashboard</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo base_url(); ?>check_in/"><i class="fa fa-table"></i> Check In</a>
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
                                        <th>Kamar</th>
                                        <th>Penginap</th>
                                        <th>Tanggal Check in</th>
                                        <th>Tanggal Check out</th>
										<th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
										$no = 1;
										foreach ($check_in_m as $data)
										{
											echo"<tr>
													<td>$data->kd_check_in</td>
													<td>$data->kd_kamar</td>
													<td>$data->kd_data_penginap</td>
                                                    <td>$data->tanggal_check_in</td>
                                                    <td>$data->tanggal_check_out</td>
                                                    <td>";
                                                    if($data->status=='Belum'){
                                                    echo "
                                                        <a href='".base_url()."check_out/add/$data->kd_check_in'><button type='button' class='btn btn-sm btn-warning'> Check Out</button></a>";
                                                    } ?>
												</td>
                                                </tr>
                                        <?php
                                        $no++;
                                        }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->