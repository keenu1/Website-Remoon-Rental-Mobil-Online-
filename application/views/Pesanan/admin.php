<div id="wrapper">
	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- <div class="float-right">
								<a href="" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
							</div> -->

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
					<?php foreach ($row as $detail) : ?>
							<tr>
								<td><?= $detail['name'] ?></td>
								<td><?= $detail['nama'] ?></td>
								<td><?= $detail['lama_sewa'] ?></td>
								<td><?= $detail['tanggal_ambil'] ?></td>
								<td><?= $detail['jaminan'] ?></td>
								<?php $hasil = $detail['harga']*$detail['lama_sewa'] ?>
								<td>Rp. <?= $hasil ?></td>
								<td><?= $detail['jenis_bayar'] ?></td>
                                <td>
								<?= anchor('Pesanan/detail/'.$detail['id_transaksi'], '<div class="btn btn-warning btn-sm">Details</div>')?>
					            <?= anchor('Pesanan/hapus/'.$detail['id_transaksi'], '<div class="btn btn-danger btn-sm">Hapus</div>') ?>
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
		<br>	
	</div>
</div>
</div>