<?php 
include('class/User.php');
$user 		= new User();
$message 	= $user->createAdmin("admin1@test.com", "123456");
include('include/header.php');
error_reporting(0);
?>
<title>Login</title>
<?php include('include/container.php');?>
<div class="container contact">		
<div class="alert alert-success col-sm-12"><?php echo $message; ?></div>                            
<h4>Sample Account <h4><bR>
admin@test.com <bR>
123456	
</div>	
<?php include('include/footer.php');?>