			<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Booking
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Dashboard</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo base_url(); ?>booking/view/"><i class="fa fa-table"></i> Booking</a>
                            </li>
                            <li class="">
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
                                        <th>Kamar</th>
                                        <th>Penginap</th>
										<th>Tanggal Booking</th>
                                        <th>Tanggal Check in</th>
                                        <th>Tanggal Check out</th>
                                        <th>Total</th>
                                        <th>Uang Muka</th>
										<th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
										$no = 1;
										foreach ($booking_m as $data)
										{
											echo"<tr>
													<td>$data->kd_booking_kamar</td>
													<td>$data->kd_kamar</td>
													<td>$data->kd_data_penginap</td>
													<td>$data->tanggal_booking</td>
                                                    <td>$data->tanggal_check_in</td>
                                                    <td>$data->tanggal_check_out</td>
                                                    <td>$data->total</td>
                                                    <td>$data->bayar</td>
                                                    <td>";
                                                    if($data->status=='Belum'){
                                                    echo "
                                                        <a href='".base_url()."check_in/add/$data->kd_kamar'><button type='button' class='btn btn-sm btn-warning'> Check In</button></a>";
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