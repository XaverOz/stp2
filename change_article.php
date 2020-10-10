<?php 
	$filename = "tmp.txt";
        $file = fopen( $filename, "w" );
        fwrite($file,  $_POST["text_article"] );
        fclose( $file );
	header('Location: page1.php');
?>
