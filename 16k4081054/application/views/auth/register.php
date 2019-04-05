<?php include('head.php' )?>
<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><?php echo lang('index_create_user_link'); ?></h1>
              </div>
<?php 
  $attribute=array('class'=>'user');
  echo form_open("auth/register",$attribute);
?>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                   <?php echo ' <input type="text" class="form-control form-control-user" id="first_name" name="first_name" placeholder="'.lang('index_fname_th').'">' ?>
                  </div>
                  <div class="col-sm-6">
                    <?php echo '<input type="text" class="form-control form-control-user" id="last_name" name="last_name" placeholder="'.lang('index_lname_th').'">' ?>
                  </div>
                </div>
                <div class="form-group">
                  <?php echo '<input type="email" class="form-control form-control-user" id="email" name="email" placeholder="'.lang('index_email_th').'">'?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <?php echo '<input type="password" class="form-control form-control-user" id="password" name="password" placeholder="'.lang('create_user_password_label').'">' ?>
                  </div>
                  <div class="col-sm-6">
                    <?php echo '<input type="password" class="form-control form-control-user" id="password_confirm" name="password_confirm" placeholder="'.lang('create_user_password_confirm_label').'">' ?>
                  </div>
                </div>
<?php echo '<input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="'.lang('index_register_account').'">' ?> 
                <hr>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>              
              <?php echo form_close();?>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.html">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
<?php include('footer.php' )?>