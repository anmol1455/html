<?php
class abc
{
	
	function add($a,$b)
	{
	$c=$a+$b;
	echo "$c";
	}
	function sub($a,$b)
	{
	return ($a-$b);
	
	}
}

 $obj1=new abc();
$obj1->add(10,50);
$r=$obj1->sub(40,20);
echo "$r";
?>