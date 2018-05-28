


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - <?=$title ?></h4>
						</div>

						<div class="heading-elements">

						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active"><?=$title ?></li>
						</ul>

						<ul class="breadcrumb-elements">

						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Main charts -->

					<!-- /main charts -->


					<!-- Survey content -->
					<div class="row">
						<div class="col-lg-12">

							<!-- Marketing campaigns -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<!-- <h6 class="panel-title">Marketing campaigns</h6> -->
								</div>
								<div class="panel-body">
									<div class="row">
										<table class="table datatable-basic">
											<thead>
												<tr class="bg-blue">
													<th>No</th>
													<th>NoUrut</th>
													<th>ID Pelanggan</th>
													<th>Nama</th>
													<th>Wilayah</th>
													<th>Alamat</th>
													<th class="text-center">Actions</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($survey as $key => $row) { ?>
												<tr>
													<td><?=$key+1?></td></td>
													<td><?=$row->NoUrut?></td></td>
													<td><a href="#"><?=$row->IDPel?></a></td>
													<td><?=$row->Nama?></td>
													<td><?=$row->Wilayah?></td>
													<td><?=$row->Alamat?></td>
													<td class="text-center">
														<ul class="icons-list">
															<li class="dropdown">
																<a href="#" class="dropdown-toggle" data-toggle="dropdown">
																	<i class="icon-menu9"></i>
																</a>

																<ul class="dropdown-menu dropdown-menu-right">
																	<li><a href="<?=base_url('main/survey/detail/'.$row->IDPel)  ?>"><i class="icon-magazine"></i> Detail</a></li>
																	<!-- <li><a href="#"><i class="icon-map"></i> View Map</a></li> -->
																</ul>
															</li>
														</ul>
													</td>
												</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /latest posts -->

						</div>
					</div>
