			<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Check Out
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Dashboard</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo base_url(); ?>check_in/"><i class="fa fa-table"></i> Check Out</a>
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
                                        <th>Kode Check In</th>
                                        <th>Tanggal Check out</th>
										<th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
										$no = 1;
										foreach ($check_out_m as $data)
										{
											echo"<tr>
													<td>$data->kd_check_out</td>
                                                    <td>$data->kd_check_in</td>
                                                    <td>$data->tanggal_check_out</td>
                                                </tr>";
                                        }
                                        $no++;
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->