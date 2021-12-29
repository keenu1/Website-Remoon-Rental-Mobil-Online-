<div class="container-fluid">
    <div class="col-sm-12">
        <div class="clearfix">
            <div class="float-left">
                <h1 class="h3 mb-4 text-gray-800"><?= $titleHeader ?> Profile </h1>

            </div>
        </div>
        <hr>
    </div>
    <div class="col-md-4 offset-1 mt-5 mb-auto">
        <?php foreach ($row as $dt) : ?>
            <form action="<?php echo base_url() . 'User/Update'; ?>" method="post">
                <input <?= ($titleHeader == 'Detail') ? 'readonly' : null ?> type="hidden" name="id" value="<?= $dt['id'] ?>">

                <div class="form-group">
                    <label for="username">Nama</label>
                    <input <?= ($titleHeader == 'Detail') ? 'readonly' : null ?> type="text" name="username" class="form-control" value="<?= $dt['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Email</label>
                    <input <?= ($titleHeader == 'Detail') ? 'readonly' : null ?> type="text" name="alamat" class="form-control" value="<?= $dt['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="phone_number">NO Handphone</label>
                    <input <?= ($titleHeader == 'Detail') ? 'readonly' : null ?> type="text" name="phone_number" class="form-control" value="<?= $dt['phone_number'] ?>">
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input <?= ($titleHeader == 'Detail') ? 'readonly' : null ?> type="text" name="address" class="form-control" value="<?= $dt['address'] ?>">
                </div>
                <div class="form-group">
                    <label for="username">Role Id</label>
                    <select <?= ($titleHeader == 'Detail') ? 'disabled' : null ?> class="form-control" name="role_id">
                        <?php foreach ($roles as $role) : ?>
                            <option <?= ($role['id'] == $dt['role_id']) ? 'selected' : null ?> value="<?= $role['id'] ?>">
                                <?= $role['role'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="row mt-5 ml-5">
                    <!-- <a href="<?= base_url('profile/detail_akun/') ?>" class="btn btn-success">details</a> -->
                </div>

                <div class="row align text-center">
                    <div class="col">
                        <!-- <a href="<?= base_url('mobil/ubah/') ?>" class="btn btn-sm btn-info"><i class="fa fa-pen"></i> Ubah</a> -->
                        <?php if ($titleHeader == 'Edit') : ?>
                            <button type='submit' class="btn btn-sm btn-info"><i class="fa fa-edit"></i> Ubah</button>
                        <?php endif ?>
                        <a href="<?= base_url('User/akun') ?>" class="btn btn-sm btn-secondary"><i class="fa fa-reply"></i> Kembali</a>
                    </div>
                </div>
            <?php endforeach; ?>
            </form>
    </div>
</div>
</div>