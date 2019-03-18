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
									<h4 class="card-title"><img src="<?php echo base_url('assets/dashboard/img/booksss.png') ?>">&nbsp;Borrowing Books</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Kode Transaksi</th>
													<th>No Anggota</th>
													<th>Nama Lengkap</th>
													<th>Tanggal Pinjam</th>
													<th>Tanggal Kembali</th>
													<th>Option</th>
												</tr>
											</thead>
											<?php foreach ($borrowing_buku as $b_buku){?>
												<tr>
													<td><?= $b_buku->kode_transaksi ?></td>
													<td><?= $b_buku->id_anggota ?></td>
													<td><?= $b_buku->nama_lengkap ?></td>
													<td><?= $b_buku->tgl_pinjam ?></td>
													<td><?= $b_buku->tgl_kembali ?></td>
													<td><a href="<?php echo base_url('borrowingbooks/update/') ?><?=$b_buku->id?>">Update</a>|<a href="<?php echo base_url('borrowingbooks/delete/') ?><?=$b_buku->id?>">Update</a></td>
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