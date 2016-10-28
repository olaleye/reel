<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">   

    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->

        <div class="register-box">
            <div class="register-logo">
                <a href="<?= site_url('/'); ?>"><b>REEL</b> INVOICING</a>
            </div>

            <div class="register-box-body">
                <p class="login-box-msg">Register a new membership</p>

                <?php $attributes = array('id' => 'register_form', 'autocomplete' => 'off') ?>
                <?php echo form_open('user/register', $attributes); ?>
                <!--
                    Error message for the field
                -->
                <span class="text-danger"><?php echo (isset($this->session->flashdata('error')['firstName'])) ? $this->session->flashdata('error')['firstName'] : ''; ?></span>
                <div class="form-group has-feedback">                    
                    <input type="text" class="form-control" placeholder="First Name" name="firstName" autocomplete="off">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                
                <!--
                    Error message for the field
                -->
                <span class="text-danger"><?php echo (isset($this->session->flashdata('error')['lastName'])) ? $this->session->flashdata('error')['lastName'] : ''; ?></span>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Last Name" name="lastName" autocomplete="off">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                
                <!--
                    Error message for the field
                -->
                <span class="text-danger"><?php echo (isset($this->session->flashdata('error')['email'])) ? $this->session->flashdata('error')['email'] : ''; ?></span>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email" autocomplete="off">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                
                <!--
                    Error message for the field
                -->
                <span class="text-danger"><?php echo (isset($this->session->flashdata('error')['password'])) ? $this->session->flashdata('error')['password'] : ''; ?></span>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                
                <!--
                    Error message for the field
                -->
                <span class="text-danger"><?php echo (isset($this->session->flashdata('error')['confirmPassword'])) ? $this->session->flashdata('error')['confirmPassword'] : ''; ?></span>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Retype password" name="confirmPassword" autocomplete="off">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
                <?= form_close(); ?>

                <a href="<?= site_url('/') ?>" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div>


    </section>
    <!-- /.content -->
</div>




