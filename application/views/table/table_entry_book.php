		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<!-- <div class="page-header">
						<h4 class="page-title">DataTables.Net</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Tables</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Datatables</a>
							</li>
						</ul>
					</div> -->
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title"><img src="<?php echo base_url('assets/dashboard/img/booksss.png') ?>">&nbsp;Entry Book</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Kode Buku</th>
													<th>Judul Buku</th>
													<th>Tahun Buku</th>
													<th>Jumlah Buku</th>
													<th>Tanggal Masuk</th>
													<th>Option</th>
												</tr>
											</thead>
											<?php foreach ($entry_buku as $e_buku){?>
												<tr>
													<td><?= $e_buku->kode_buku ?></td>
													<td><?= $e_buku->judul_buku ?></td>
													<td><?= $e_buku->tahun_buku ?></td>
													<td><?= $e_buku->jumlah_buku ?></td>
													<td><?= $e_buku->tgl_masuk ?></td>
													<td><a href="<?php echo base_url('entrybook/update/') ?><?=$e_buku->id?>">Update</a>|<a href="<?php echo base_url('entrybook/delete/') ?><?=$e_buku->id?>">Delete</a></td>
												</tr>
											<?php }?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>