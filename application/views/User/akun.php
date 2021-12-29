<div class="col-sm-8 offset-2">
	<div class="card shadow">
		<div class="card-header">
			<h6 class="m-0 font-weight-bold text-success"><?= $title ?></h6>
		</div>
		<div class="card-body">

			<table class="table table-bordered" id="dataTable" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>email</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($manajemenakun as $akun) : ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $akun['name'] ?></td>
							<td><?= $akun['email'] ?></td>
							<td>
								<a href="<?= base_url('User/detail/' . $akun['id']) ?>" class="btn btn-sm btn-warning"><i class="fas fa-fw fa-eye"></i> Detail</a>
								<a href="<?= base_url('User/edit/' . $akun['id']) ?>" class="btn btn-sm btn-info"><i class="fas fa-fw fa-edit"></i> Edit</a>
								<a href="<?= base_url('User/hapus/' . $akun['id']) ?>" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash"></i> Hapus</a>

							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>