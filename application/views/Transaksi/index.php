   <div class="container col-md-4">
    <div class="panel panel-info">
    <div class="panel-heading"><h3 class="text-center">Sewa</h3></div>
    <div class="panel-body">    
            <?= form_open_multipart('Transaksi/tambah'); ?>
            <?php foreach ($mobil as $mb) : ?>
            <input type="hidden" name="id_mobil" value="<?= $mb['id'] ?>">
            <?php endforeach; ?>
            <input type="hidden" name="id_user" value="<?= $user['id']; ?>">


            <div class="form-group">
                <label for="lama">Lama Sewa (hari)</label> 
                <input type="number" name="lama_sewa" class="form-control"> 
            </div>
            <div class="form-group">
                <label for="lama">Tanggal Ambil</label> 
                <input type="date" name="tanggal_ambil" class="form-control"> 
            </div>
            <div class="form-group">
                <label for="jaminan">Jaminan</label>
                <select name="jaminan" class="form-control">
                    <option value="sim">SIM</option>
                    <option value="ktp">KTP</option>
                    <option value="stnk">STNK</option>
                    <option value="passport">Passport</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jenis_bayar">Jenis Bayar</label>
                <select name="jenis_bayar" class="form-control">
                    <option value="cash">cash</option>
                    <option value="kredit">kredit</option>
                </select>
            </div>
            <br>
            <br>
            <div class="form-group align text-center">
            <button type="submit" class="btn btn-sm btn-primary" name="tambah">Next</button>
            </div>
            <div class="form-group">
            </div>
        <?= form_close(); ?>
    </div>
</div>
</div>
</div>