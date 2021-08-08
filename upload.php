<!DOCTYPE html> <html lang="zxx"> <head> <title>Upload failed</title>
<head>
<?php 
include('class/User.php');
$user = new User();
$message =  $user->uploadFile();
include('include/header.php');
?>

<?php include('include/container.php');?>
<div class="container contact">	
	<div id="uploadbox" class="col-md-12">
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="panel-title">Upload File</div>				
			</div>  
			<div class="panel-body" >
				<form id="uploadform" class="form-horizontal" role="form" method="POST" action="" enctype="multipart/form-data">				
					<?php if ($message != '') { ?>
						<div class="alert alert-success col-sm-12"><?php echo $message; ?></div>                            
					<?php } ?>	
					<div class="form-group">
						<label for="name" class="col-md-3 control-label">Name*</label>
						<div class="col-md-9">
							<input type="file" class="form-control" name="user_file"  required>
						</div>
					</div>
					<div style="margin-top:10px" class="form-group">                               
						<label for="name" class="col-md-3 control-label"></label>	
						<div class="col-sm-9 controls">
						  <input type="submit" name="upload" value="Submit" class="btn btn-info">						  
						</div>						
					</div>
         		 </form>
      		</div>
    	</div>
  </div>
</div>
<?php include('include/footer.php');?>
<?php

// if($_FILES["user_file"]["name"]) {
//     $target_dir = "uploads/";
//     $target_file = $target_dir . basename($_FILES["user_file"]["name"]);
   
//     if (move_uploaded_file($_FILES["user_file"]["tmp_name"], $target_file)) {
//       echo "<bR>The file ". htmlspecialchars( basename( $_FILES["user_file"]["name"])). " has been uploaded.";
//     } else {
//       echo "<bR>Sorry, there was an error uploading your file.";
//     }
  
// }
?>