    <div class="container-fluid">
        <div class="col-sm-12">
            <div class="clearfix">
                <div class="float-left">
                    <h1 class="h3 mb-4 text-gray-800"><?= $titleHeader ?> </h1>
                </div>
            </div>
            <hr>
        </div>
        <div class="col-md-4 offset-1 mt-5 mb-auto">
            <form action="<?php echo base_url() . 'profile/update'; ?>" method="post">
                <input <?= ($titleHeader == 'Detail') ? 'readonly' : null ?> type="hidden" name="id" value="<?= $user['id'] ?>">
                <div class="form-group">
                    <label for="username">Nama</label>
                    <input <?= ($titleHeader == 'Profile') ? 'readonly' : null ?> type="text" name="username" class="form-control" value="<?= $user['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Email</label>
                    <input <?= ($titleHeader == 'Profile') ? 'readonly' : null ?> type="text" name="alamat" class="form-control" value="<?= $user['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="phone_number">NO Handphone</label>
                    <input <?= ($titleHeader == 'Profile') ? 'readonly' : null ?> type="text" name="phone_number" class="form-control" value="<?= $user['phone_number'] ?>">
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input <?= ($titleHeader == 'Profile') ? 'readonly' : null ?> type="text" name="address" class="form-control" value="<?= $user['address'] ?>">
                </div>
                <?php if ($titleHeader == 'Edit') : ?>
                    <button type='submit' class="btn btn-sm btn-info"><i class="fa fa-save"></i> Simpan</button>
                    <a href="<?= base_url('User/akun') ?>" class="btn btn-sm btn-secondary"><i class="fa fa-reply"></i> Kembali</a>
                <?php endif ?>

                <?php if ($titleHeader == 'Profile') : ?>
                    <div class="row mt-5 ml-5">
                        <a href="<?= base_url('profile/edit/') ?>" class="btn btn-info"><i class="fa fa-edit"></i>Edit</a>
                    </div>
                <?php endif ?>
            </form>
        </div>

    </div>
    </div>