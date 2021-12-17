    <div class="container-fluid">
					<div class="col-sm-12">
						<div class="clearfix">
							<div class="float-left">
								<h1 class="h3 mb-4 text-gray-800">Profile</h1>
							</div>
						</div>
						<hr>
					</div>
                <div class="col-md-4 offset-1 mt-5 mb-auto">                                   
                    <div class="form-group">
                        <label for="username">Nama</label>
                        <input disabled="on" type="text" name="username" class="form-control" value="<?= $user['name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Email</label>
                        <input disabled="on" type="text" name="alamat" class="form-control" value="<?= $user['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone_number">NO Handphone</label>
                        <input disabled="on" type="text" name="phone_number" class="form-control" value="<?= $user['phone_number'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <input disabled="on" type="text" name="address" class="form-control" value="<?= $user['address'] ?>">
                    </div>

                        <div class="row mt-5 ml-5">
                        <!-- <a href="<?= base_url('profile/detail_akun/')?>" class="btn btn-success">details</a> -->
                    </div>
                </div>
			</div>
		</div>
