<?php
require('includes/config.php');

			$delbook=$_GET['id'];
			$query="delete from book where b_id ='$delbook'";
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:all_book.php");

?>