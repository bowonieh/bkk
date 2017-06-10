<div class="row">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue">Daftar Lowongan BKK || 
										<a href="<?php echo base_url();?>index.php/backend/formtambah" class="green" rel="modal"><button type="submit" class="btn btn-primary"> <i class="ace-icon fa fa-plus-circle bigger-130"></i> Tambah!</button></a>

										</h3>

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->

										<div>

								<table id="dynamic-table" class="table table stripper table-bordered table-hover">
											<thead><tr>
												<th>NO</th>
												<th>Perusahaan</th>
												<th>Deskripsi</th>
												<th>Max Usia</th>
												<th>Status</th>
												<th>aksi</th>
											</tr></thead>
											<!-- <tbody id="remoteList" attr-list="<?php echo base_url();?>index.php/backend/remotelist"> -->
											<tbody>
											<?php 
												$no = 1;
												foreach ($loker as $d ) {
													# code...
													?>
													<tr>
														<td><?php echo $no++;?></td>
														<td><?php echo $d->perusahaan;?></td>
														<td><?php echo word_limiter($d->judul,30);?></td>
														<td><?php echo $d->max_umur;?></td>
														<td>
															<?php
																if($d->status === '1')
																{
																	echo "<span class=\"label label-sm label-success\">AKTIF</span>";
																}else{
																	echo "<span class=\"label label-sm label-warning\">Tidak Aktif</span>";
																}

															?>
														</td>
														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" href="<?php echo base_url();?>index.php/backend/loker/<?php echo $d->id_lowongan;?>">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>
														</td>
													</tr>
													<?php 
												}
												?>


											</tbody>
											
										


											</table>

										</div>
									</div>
								</div>