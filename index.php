<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
		
			<!-- start header -->
				<div id="header" >
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

				<div id="page">
	
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome to 
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo 'VIT Online Book Store';
								}
							?>
							</h1>
							<div class="entry">
								<br>
								
								<br>		
								
								<object width="550" height="400">
								<embed src="book1.jpg" padding="20px" width="225" height="200">
								<embed src="book2.jpg"  padding="20px" width="225" height="200">
									<br/>
								<embed src="4.jpg"  padding="20px" width="450" height="350">
								</embed>
								</object>
								<br><br>
								
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
