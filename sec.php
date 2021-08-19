<?php
	session_start();
?>
<html>
<body>
<?php
	echo "hello " .$_SESSION['name'];
?>
<form action="n.php" method="get">
<input type= "submit" value="logout">
</form>
</body>
</html>