<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('Auth/registration'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name" placeholder="full name" name="name" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" placeholder="Email Address" name="email" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="phone_number" placeholder="phone number" name="phone_number" value="<?= set_value('phone_number'); ?>">
                                <?= form_error('phone_number', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="address" placeholder="address" name="address" value="<?= set_value('address'); ?>">
                                <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-success btn-user btn-block">
                                Register Account
                            </button>
                            <hr>

                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small text-success" href="<?= base_url('Auth'); ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>