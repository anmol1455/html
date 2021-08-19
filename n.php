<?php
 session_start();
 
?>
<html>
<body>
<h1>Logout page"</h1>
<?php 
session_destroy(); 
	if(isset($_SESSION))
	{
	
	unset($_SESSION['name']); 
	echo "succesfully not logout";
	echo $_SESSION['course'];
	echo $_SESSION['name'];
	}
	else
	{
		echo "not set";
	}
?>
</body>
</html>