<?php
     // opens a new file to write
	 $data_file=fopen("example.txt","w");
	 
	 $name=$_POST["name"];
	 $message=$_POST["message"];
	 $text_to_write =$name . "  ". $message;
	 
	 //write to server side file 
	 fwrite($data_file, $text_to_write);
	 fclose($data_file);
?>	 
	 
	 