<?php
		$myfile=fopen("newfite.txt","r+");
		$myfile or die  ("file not exist");
		fwrite($myfile,"anmol singh is here....so no fear!!");
		$size=filesize("newfite.txt");
		echo "size of file is :", $size;
		#$data=fread($myfile,$size);
		#echo "$data";
		while(!feof($myfile))
		{
		echo fgets($myfile);
		}
		fclose($myfile);
?>