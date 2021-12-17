<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
						<div class="clearfix">
							<div class="float-left">
								<h1 class="h3 mb-4 text-gray-800">Detail Mobil</h1>
							</div>
							<hr>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8 offset-2">
						<div class="card shadow">
							<div class="card-header">
								<h6 class="m-0 font-weight-bold text-primary"></h6>
							</div>
							<div class="card-body">
								<div class="row">   
									<div class="col-md-6">
                                                <?php foreach ($row as $data) { ?>
                                                    <img src="<?= base_url();?>assets/mobil/<?=$data['gambar'];?>" alt="nama mobil" class="img-thumbnail mb-4">
									</div>
									<div class="col-md-6">
										<table class="table table-borderless">
											<tr>
												<td>Nama</td>
												<td>:</td>
												<td><b><?= $data['nama'] ?><b></td>
											</tr>
											<tr>
												<td>Merk</td>
												<td>:</td>
												<td><b><?= $data['merk'] ?></b></td>
											</tr>
											<tr>
												<td>Nomer Polisi</td>
												<td>:</td>
												<td><b><?= $data['no_polisi'] ?></b></td>
											</tr>
											<tr>
												<td>Jumlah Kursi</td>
												<td>:</td>
												<td><b><?= $data['jumlah_kursi'] ?></b></td>
											</tr>
											<tr>
												<td>Harga</td>
												<td>:</td>
												<td><b><?= $data['harga'] ?></b></td>
											</tr>
                                                <?php 
                                                } ?>
										</table>	
                                        <div class="row mx-auto">
                                            <div class="col">
                                               <a href="<?= base_url('Beranda') ?>" class="btn btn-sm btn-secondary"><i class="fa fa-reply"></i> Kembali</a>
                                            </div>
                                        </div>	
									</div>				
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
