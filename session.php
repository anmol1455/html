<?php
	session_start();
?>
<html>
<body>
html page
<?php
$_SESSION['name']="Anmol";
$_SESSION['course']="python";
echo "First page" .$_SESSION['name'];
?>
<form action ="sec.php", method="get">
<input type= "submit" value="click me">

</form>
</body>
</html>