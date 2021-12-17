			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
						<div class="clearfix">
							<div class="float-left">
								<h1 class="h3 mb-4 text-gray-800">Data Merk</h1>
							</div>
						</div>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="card shadow">
							<div class="card-header">
								<h6 class="m-0 font-weight-bold text-success">Tambah Data</h6>
							</div>
							<div class="card-body">
								<form action="<?= base_url().'Merk/tambah_data'; ?>" method="POST">
								  	<div class="form-group">
										<label for="merk">Nama Merk</label>
										<input type="text" class="form-control" name="merk" id="merk" required="required" placeholder="ketik">
								  	</div>
								  	<div class="form-group">
										<button type="submit" class="btn btn-sm btn-success" name="tambah"><i class="fa fa-plus"></i> Tambah</button>
										<button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Batal</button>
								  	</div>
								</form>
							</div>
						</div>
					</div>

					<div class="col-sm-8">
						<div class="card shadow">
							<div class="card-header">
								<h6 class="m-0 font-weight-bold text-success">Daftar Merk</h6>
							</div>
							<div class="card-body">
								<table class="table table-bordered" id="dataTable" width="" cellspacing="0">
	                  				<thead>
	                    				<tr>
	                    					<th>No</th>
	                    					<th>Merk</th>
	                    					<th>Aksi</th>
	                    				</tr>
	                 				</thead>
	                 				<tbody>	                 						
											 <?php foreach ($namamerk as $mk) : ?>
												<tr>
													<td><?php echo $no++; ?></td>
													<td><?php echo $mk['merk']; ?></></td>
	                 								<td><?= anchor('Merk/hapus/'.$mk['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash" style="color:white"> hapus</i></a></div>') ?></td>
												</tr>
											 <?php endforeach; ?>
	                 				</tbody>
              					</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
