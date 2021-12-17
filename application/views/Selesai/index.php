<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="text-center">Transaksi Berhasil</h3>
        </div>
        <div class="panel-body col-md-10 offset-1">
            <table class="table table-bordered">
            <?php foreach ($transaksidetail as $detail) : ?>
                <thead>
                    <tr>
                        <th>Nama Pelanggan</th>
                        <td><?= $detail['name'] ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?= $detail['email'] ?></td>
                    </tr>
                    <tr>
                        <th>Harga Sewa</th>
                        <td>Rp. <?= $detail['harga'] ?> /hari</td>
                    </tr>
                    <tr>
                        <th>Lama Sewa</th>
                        <td><?= $detail['lama_sewa'] ?> Hari</td>
                    </tr>
                    <tr>
                        <th>Tanggal Ambil</th>
                        <td><?= $detail['tanggal_ambil'] ?></td>
                    </tr>
                    <?php $hasil = $detail['lama_sewa']*$detail['harga'] ?>
                    <tr>
                        <th>Total Bayar</th>
                        <td>Rp. <?= $hasil ?></td>
                    </tr>
                    <tr>
                        <th>Jaminan</th>
                        <td><?= $detail['jaminan'] ?></td>
                    </tr>
                    <tr>
                        <th>Jenis Pembayaran</th>
                        <td><?= $detail['jenis_bayar'] ?></td>
                    </tr>
                </thead>
            <?php endforeach; ?>
            </table>
            <hr>
            <h3>Terimakasih</h3>
            <p>
                Transaksi pembelian anda telah berhasil<br>
                Silahkan anda membayar tagihan anda dengan cara transfer via Bank BRI di nomor Rekening : <br>
                <strong>(0986-01-025805-53-8 a/n RENTAL MOBIL)</strong> untuk menyelesaikan pembayaran. dan untuk uang muka minimal setengah dari harga sewa.
            </p>
        </div>
        <div class="panel-footer">
            <a href="<?= base_url('Pesanan/index'); ?>" class="btn btn-primary btn-sm col-sm-1.5 offset-5">Lihat Pesanan</a>
        </div>
        <br>
    </div>
</div>