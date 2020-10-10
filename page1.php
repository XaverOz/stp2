<?php 
	echo '<script src="script1.js"></script>';
	echo '<link rel="stylesheet" href="main.css">';
	echo '<div class="header">Заголовок1</div>'; 
	echo '<div id="article1">Статья1 Статья1 
Статья1 Статья1 Статья1 Статья1 Статья1 
Статья1 Статья1 Статья1 Статья1 Статья1 
Статья1 Статья1 Статья1 Статья1 Статья1 
Статья1 Статья1 Статья1 Статья1 Статья1 
Статья1 Статья1 Статья1 Статья1 Статья1 
Статья1 Статья1 Статья1 Статья1 Статья1 
Статья1 Статья1 Статья1 Статья1 Статья1 
Статья1 Статья1 Статья1 Статья1 Статья1 
Статья1 Статья1 Статья1 Статья1 Статья1 
Статья1 Статья1 Статья1 Статья1 Статья1 
Статья1</div>';
	echo '<div id="article2">'; 
	echo '<form action="change_article.php"  method="POST">'; 
	$filename = "tmp.txt";
	$file = fopen( $filename, "r" );
	$filesize = filesize( $filename );
	$filetext = fread( $file, $filesize );
	fclose( $file );
	echo '<input id="submit" type="button" value="Редактировать" onclick="click_submit()"></input>';
	echo '</form>';
	echo $filetext.'</div>'; 
?>
