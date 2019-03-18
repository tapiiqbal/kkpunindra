	<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Forms</h4>
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
								<a href="#">Forms</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Form Book Entry</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Form Borrowing Books</div>
								</div>
								<form action="<?php echo base_url('borrowingbooks/input') ?>" method="POST" enctype="multipart/form-data">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="kode_transaksi">Kode Transaksi</label>
												<option></option>
												<input type="text" class="form-control" name="kode_transaksi" id="kode_transaksi" placeholder="Enter Kode Transaksi">
											</div>
											<!-- <div class="form-group">
												<label for="defaultSelect">Default Select</label>
												<select class="form-control form-control" id="defaultSelect">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>
											</div> -->
											<div class="form-group">
												<label for="id_anggota">Id Anggota</label>
												<input type="text" class="form-control" name="id_anggota" id="id_anggota" placeholder="Enter Id Anggota">
											</div>
											<div class="form-group">
												<label for="nama_lengkap">Nama Lengkap</label>
												<input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Enter Nama Lengkap">
											</div>
											<div class="form-group">
												<label for="tgl_pinjam">Tanggal Pinjam</label>
												<input type="date" class="form-control" name="tgl_pinjam" id="tgl_pinjam" placeholder="Enter Tanggal Pinjam">
											</div>
											<div class="form-group">
												<label for="tgl_kembali">Tanggal Kembali</label>
												<input type="date" class="form-control" name="tgl_kembali" id="tgl_kembali" placeholder="Enter Tanggal Kembali">
											</div>
										</div>
									</div>
								</div>
								<div class="card-action">
									<button class="btn btn-success" type="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<button class="btn btn-danger">Cancel</button>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>