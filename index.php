<?php 
	/*$file = fopen("data.txt","a+");
	$name="";
	$id="";
	$date="";
	while(!feof($file))
	{
		$line = fgets($file);
		$content=explode(" ",$line);//similar to split
		echo "Name: $content[0]<br>";
		echo "Id: $content[1]<br>";
		echo "Date: $content[2]<br>";
		if($content[0] == "Sabbir")
		{
			$name=$content[0];
			$id=$content[1];
			$date=$content[2];
		}
		//echo $line.'<br>';
		
	}*/
	//echo $file;
	$xml=simplexml_load_file("data.xml");
	print_r($xml);
	for($i=0;$i<count($xml->faculty);$i++)
	{
		echo $xml->faculty[$i]->name.'<br>';
		echo "Dept: ".$xml->faculty[$i]["dept"].'<br>';
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/*$file=fopen("data.txt","a+");
	while(!feof($file))
	{
		echo fgets($file);
	}*/
	/*$file=simplexml_load_file("data.xml");
	//print_r($file->faculty[0]);
	foreach($file->faculty as $faculty)
	{
		echo $faculty->name.'<br>';
	}*/
?>