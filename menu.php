<?php session_start();?>
<div id="top-nav" class="navbar navbar-inverse navbar-static-top" style="background:#c4e3f3;color:white;border-color:white;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
        </div>
        <div>
            Welcome <?php echo strtoupper($_SESSION['name']); ?>
            <ul class="nav navbar-nav navbar-right">
                <li><a class="navbar-brand" href="upload.php" > Upload File</a></li>                    
                <li><a href="account.php"><i class="fa fa-user-secret"></i> My Profile</a></li>	
                
                <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>
    </div>    
</div>
