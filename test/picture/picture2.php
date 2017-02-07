<?php
/* Read the image */
$im = new imagick( "test_images.jpg" );
/* create the thumbnail */
$im->adaptiveResizeImage( 1024,512,true );
//$im->resizeImage ( 1024,512,true  );
//$im->thumbnailImage ( 1024,512,true  );
/* Write to a file */
$im->writeImage( "1.jpg" );

$im = new imagick( "test_images.jpg" );
/* create the thumbnail */
//$im->adaptiveResizeImage( 1024,512,true );
//$im->resizeImage ( 1024,512,true  );
$im->thumbnailImage ( 1024,512,true  );
/* Write to a file */
$im->writeImage( "2.jpg" );

$im = new imagick( "images.jpg" );
/* create the thumbnail */
$im->adaptiveResizeImage( 1024,512,true );
//$im->resizeImage ( 1024,512,true  );
//$im->thumbnailImage ( 1024,512,true  );
/* Write to a file */
$im->writeImage( "3.jpg" );

$im = new imagick( "http://www.gsmprice.com/uploads/images/full/832b6fd721958b52db7e76c5d479f975.jpg" );
/* create the thumbnail */
//$im->adaptiveResizeImage( 1024,512,true );
//$im->resizeImage ( 1024,512,true  );
$im->thumbnailImage ( 1024,512,true  );
/* Write to a file */
$im->writeImage( "pict/4.jpg" );
?>
test_images.jpg->adaptiveResizeImage( 1024,512,true );
<img src='1.jpg'>
test_images.jpg->thumbnailImage ( 1024,512,true  );
<img src='2.jpg'>
images.jpg->adaptiveResizeImage( 1024,512,true );
<img src='3.jpg'>
images.jpg->thumbnailImage ( 1024,512,true  );
<img src='4.jpg'>