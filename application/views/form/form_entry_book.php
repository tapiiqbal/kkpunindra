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
								<a href="#">Form Entry Book</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Form Entry Book</div>
								</div>
								<form action="<?php echo base_url('entrybook/input') ?>" method="POST" enctype="multipart/form-data">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="kode_buku">Kode Buku</label>
												<input type="text" class="form-control" name="kode_buku" id="kode_buku" placeholder="Enter Kode Buku">
											</div>
											<div class="form-group">
												<label for="judul_buku">Judul Buku</label>
												<input type="text" class="form-control" name="judul_buku"id="judul_buku" placeholder="Enter Judul Buku">
											</div>
											<div class="form-group">
												<label for="tahun_buku">Tahun Buku</label>
												<input type="text" class="form-control" name="tahun_buku" id="tahun_buku" placeholder="Enter Tahun Buku">
											</div>
											<div class="form-group">
												<label for="jumlah_buku">Jumlah Buku</label>
												<input type="text" class="form-control" name="jumlah_buku" id="jumlah_buku" placeholder="Enter Jumlah Buku">
											</div>
											<div class="form-group">
												<label for="tgl_masuk">Tanggal Masuk</label>
												<input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk" placeholder="Enter Tanggal Masuk">
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