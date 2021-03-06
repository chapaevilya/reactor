<?php
$filename = "text.txt";
$file = fopen( $filename, "r" );
$filesize = filesize( $filename );
$a = fread( $file, $filesize );
fclose( $file );
echo $a
?>