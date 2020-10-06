<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
<style>
body {
  background-image: url('back.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
			<!-- start header -->
				<div id="header">
					<div id="menu">
				
						<?php
							include("includes/menu.inc.php");
						?>
						<img src="images\finnal.png" alt="VIT image" height="210" width="860">
					</div>
				</div>
				
				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title"><b><u>About Us</u><b></h1>
							<div class="entry" style="height:auto">
								
<b>We have taken the project of "Online Book Store" under the subject Open Source Programming slot B2 under the supervision of Prof. Jayakumar. The main aim of the project is to make the book store system accessible to the users of VIT University. Thus making the project more econonomical and reducing the time consumption. Inorder to overcome the problems of the existing system,we are adding more facilities and making the system online.This project is made by Tanmay Ahuja(18BIT0208), Nalin Gupta (18BIT0199), Rahul (18BIT0467), Tamanna Srivastava (18BIT473).<b>
 <br/>
  
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
