	<div id="content-wrapper" class="d-flex flex-column">
		<div class="col-sm">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-success">Pesanan</h6>
				</div>
				<div class="card-body">
					<table class="table" id="dataTable" width="" cellspacing="0">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Mobil</th>
								<th>lama sewa (hari)</th>
								<th>Tanggal ambil</th>
								<th>Jaminan</th>
								<th>Total</th>
								<th>Jenis bayar</th>
								<th>Aksi</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach ($row as $data) : ?>
								<tr>
									<td><?= $data['name'] ?></td>
									<td><?= $data['nama'] ?></td>
									<td><?= $data['lama_sewa'] ?></td>
									<td><?= $data['tanggal_ambil'] ?></td>
									<td><?= $data['jaminan'] ?></td>
									<?php $hasil = $data['harga'] * $data['lama_sewa'] ?>
									<td>Rp. <?= $hasil ?></td>
									<td><?= $data['jenis_bayar'] ?></td>
									<td>
										<?= anchor('Pesanan/detail_cust/' . $data['id_transaksi'], '<div class="btn btn-warning btn-sm">Details</div>') ?>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<div class="align text-center">
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>