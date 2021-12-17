<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clearfix">
                        <div class="float-left">
                            <h1 class="h3 mb-4 text-gray-800">Data Mobil</h1>
                        </div>
                        <!-- <div class="float-right">
								<a href="" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
							</div> -->
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
                            <?= form_open_multipart('Mobil/tambah'); ?>
                                <div class="form-group">
                                    <label for="merk">Nama Merk</label>
                                    <select name="id_merk" id="merk" class="form-control">
											<?php foreach ($merk as $mk) : ?>
												<option value="<?= $mk['id'] ?>"><?= $mk['merk'] ?></option>
                                            <?php endforeach; ?>
										</select>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Mobil</label>
                                    <input type="text" name="nama" id="nama" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="warna">Warna Mobil</label>
                                        <input type="text" name="warna" id="warna" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="jumlah_kursi">Jumlah Kursi</label>
                                        <input type="number" name="jumlah_kursi" id="jumlah_kursi" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="no_polisi">No Polisi</label>
                                        <input type="text" name="no_polisi" id="no_polisi" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="harga">Harga</label>
                                        <input type="text" name="harga" id="harga" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar Mobil</label>
                                    <input type="file" name="gambar" id="gambar" required="required" placeholder="ketik" autocomplete="off" class="form-control-file">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-success" name="tambah"><i class="fa fa-plus"></i> Tambah</button>
                                    <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Batal</button>
                                </div>
                            <?= form_close(); ?>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>

                <div class="col-sm-8">
                    <div class="card shadow">
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-success">Daftar Mobil</h6>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered" id="dataTable" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Mobil</th>
                                        <th>No Polisi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($namamobil as $mobil) : ?>
                                <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $mobil['nama'] ?></td>
                                            <td><?= $mobil['no_polisi'] ?></td>
                                            <td>
												<a href="<?= base_url('Mobil/detail/' . $mobil['id']) ?>" class="btn btn-sm btn-warning"><i class="fas fa-fw fa-eye"></i> Detail</a>
												<a href="<?= base_url('Mobil/hapus/' . $mobil['id']) ?>" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash"></i> Hapus</a>
                                            </td>
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