<ul>
			<li class="current_page_item"><a href="index.php"><b><i>Home<i><b></a></li>
			<!--<li><a href="register.php"><b><i>Register<b><i></a></li>-->
			<?php 
					if(isset($_SESSION['status']))
					{
						
						echo '<li><a href="logout.php"><b><i>Logout<b><i></a></li>';
					}
					else
					{
						echo '<li><a href="register.php"><b><i>Register<b><i></a></li>';
					}
			?>
			
			
			<li class="last"><a href="contact.php"><b><i>Contact<b><i></a></li>
			<li class="last"><a href="aboutus.php"><b><i>About Us<b><i></a></li>
			<li><a href="viewcart.php"><b><i>View Cart<b><i></a></li>
			
</ul>