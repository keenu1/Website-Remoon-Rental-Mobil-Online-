<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
						<div class="clearfix">
							<div class="float-left">
							</div>
						</div>
						<hr>
					</div>
				</div>
        <div class="row text-center">
    <?php foreach ($berandamobil as $mobil) : ?>
      <div class="card ml-3 mb-3" style="width: 16rem;">
        <img src="<?= base_url();?>assets/mobil/<?=$mobil['gambar'];?>" class="img-thumbnail" style="width: 255px; height: 175px;" alt="responsive image">
          <div class="card-body">
            <h5 class="card-title"><?= $mobil['merk'] ?> <?= $mobil['nama'] ?></h5>
              <span class="badge badge-pill badge-primary mb-3">Rp. <?= $mobil['harga'] ?></span><br>
              <a href="<?= base_url('Beranda/detailmobil/') .$mobil['id']; ?>" class="btn btn-warning">details</a>
              <a href="<?= base_url('Transaksi/sewa/') .$mobil['id'] ?>" class="btn btn-success">sewa sekarang!</a>
          </div>
        </div>
    <?php endforeach; ?>                
			</div>
		</div>
    </div>
