<div class="container fluid">
    <div class="row">
                <div class="col-sm-12">
                    <div class="clearfix">  
                        <div class="float-left">
                            <h1 class="h3 mb-4 text-gray-800">Detail Pesanan</h1>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        <div class="panel-body col-sm-8 offset-2">
            <table class="table table-bordered">
                <?php foreach ($row as $data) : ?>
                    <tr>
                        <td>Nama Pelanggan</td>
                        <td><?= $data['name'] ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?= $data['email']?></td>
                    </tr>
                    <tr>
                        <td>Harga Sewa</td>
                        <td>Rp. <?= $data['harga']?>,-/hari</td>
                    </tr>
                    <tr>
                        <td>Lama Sewa</td>
                        <td><?= $data['lama_sewa']?> hari</td>
                    </tr>
                    <tr>
                        <td>Tanggal Ambil</td>
                        <td><?= $data['tanggal_ambil']?></td>
                    </tr>
                    <tr>
                    <?php $hasil = $data['harga']*$data['lama_sewa'] ?>
                        <td>Total Bayar</td>
                        <td>Rp. <?= $hasil ?></td>
                    </tr>
                    <tr>
                        <td>Jaminan</td>
                        <td><?= $data['jaminan']?></td>
                    </tr>
                    </tr>
                    <tr>
                        <td>Jenis Bayar</td>
                        <td><?= $data['jenis_bayar']?></td>
                    </tr>
            </table>
            <hr>
        </div>
        <div class="panel-footer align text-center">
            <a href="<?= base_url('Pesanan/admin'); ?>" class="btn btn-secondary btn-sm">Kembali</a>
            <a href="<?= base_url('Pesanan/hapus/'.$data['id_transaksi']); ?>" class="btn btn-danger btn-sm">Hapus</a>
        </div>
                <?php endforeach; ?>
        <br>
        