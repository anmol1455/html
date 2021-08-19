<?php 
trait abc
{
	function tfun()
	{
	echo"<br> abc traits fun";
	}
}
trait xyz
{
	function tfun1()
	{
	echo"<br> xyz traits fun";
	}
}

interface myinter
{
	  function f1();
	 function f2();
}
class child implements myinter
{
	use abc;
	use xyz;
	function cfun1()
	{
		echo " i am a child function";
	}
	function f1()
	{
	echo"<br> f1 fun";
	}
	function f2()
	{
	echo"<br> f2 fun";
	}
		
	
}
$obj=new child();
$obj->cfun1();
$obj->f1();
$obj->tfun1();
$obj->tfun();
?>