<?php include('head.php' )?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Forgot Password</title>

  <!-- Custom fonts for this template-->
  <link href="<?=base_url()?>theme2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?=base_url()?>theme2/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2"><?php echo lang('forgot_password_heading');?></h1>
                    <p class="mb-4"><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
                  </div>



<div id="infoMessage"><?php echo $message;?></div>

<?php 
$attribute=array('class'=>'user');
  echo form_open("auth/forgot_password",$attribute);
?>

      
                    <div class="form-group">

<?php 
echo '<input type="email" class="form-control form-control-user" id="identity" name="identity" aria-describedby="emailHelp" placeholder="'.lang('login_identity_label').'">';
?>                    	
                      
                    </div>
          
<?php 
echo '<input type="text" class="btn btn-primary btn-user btn-block" name="identity" value="'.lang('forgot_password_submit_btn').'" id="identity"  />';
 ?>

                     
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="register">Create an Account!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="login">Already have an account? Login!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
<?php include('footer.php' )?>