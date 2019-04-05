<?php include('head.php' )?>
<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><?php echo lang('login_heading');?></h1>
                    <h2><p><?php echo lang('login_subheading');?></p></h2>
                  </div>


<div id="infoMessage"><?php echo $message;?></div>

<?php 
  $attribute=array('class'=>'user');
  echo form_open("auth/login",$attribute);

?>



<div class="form-group">
<?php 
  echo '<input type="email" class="form-control form-control-user" id="identity" name="identity"
                      aria-describedby="emailHelp" placeholder="'.lang('login_identity_label').'">'; 
?>

                      
                    </div>
                    <div class="form-group">
  <?php
  echo '<input type="password" class="form-control form-control-user" id="password" name="password" placeholder="'.lang('login_password_label').'">';
  ?>

                      
                    </div>
                    <div class="form-group">



                      <div class="custom-control custom-checkbox small">
<?php
  echo ' <input type="checkbox" class="custom-control-input" id="remember" name ="remember">
                        <label class="custom-control-label" for="remember">'.lang('login_remember_label').'</label>';
?>


                       
                      </div>
                    </div>
<?php echo '<input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="'.lang('login_submit_btn').'">' ?>                    





                    <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>

  

  



<?php echo form_close();?>
<hr>
                  <div class="text-center">
                    <a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

<p></p>
<?php include('footer.php' )?>