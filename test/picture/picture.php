<?php
// �������� �����������
$source = "http://img.eajc.org/data/image/new_news/55/36/0/55360.jpg";
// ���� ��� ���������� ����� ��������
$new_file = "test_images3.jpg";
$width = 500; // ����� ������
$height = 500; // ����� ������
// ���� ������� ����
$rgb = 0xffffff;
//������ ������� �������� ��������
$size = getimagesize($source);
//��������� ������
$x_ratio = $width / $size[0];
//��������� ������
$y_ratio = $height / $size[1];
// ���������� ����������� ������ � ������
$ratio = min($x_ratio, $y_ratio);
$use_x_ratio = ($x_ratio == $ratio);
// ����������� ����� ������ ��������
$new_width = $use_x_ratio ? $width : 
 floor($size[0] * $ratio);
// ����������� ����� ������ ��������
$new_height = ! $use_x_ratio ? $height :
 floor($size[1] * $ratio);
// ����������� � ��������� ����������� �� ������
$new_left = $use_x_ratio ? 0 :
floor(($width - $new_width) / 2);
// ����������� � ��������� ����������� �� ������
$new_top = ! $use_x_ratio ? 0 :
floor(($height - $new_height) / 2);
// ������� ����� ���������������� ������ ��������
$img = imagecreatetruecolor($width, $height);
// �������� ����� ������ $rgb
imagefill($img, 0, 0, $rgb);
// ��������� �������� ��������
$photo = imagecreatefromjpeg($source);
// �������� �� ����� ������ �������� � ������
//�����������
imagecopyresampled($img, $photo, $new_left, $new_top,
 0, 0, $new_width, $new_height, $size[ 0], $size[1]);
// ��������� ���������
imagejpeg($img, $new_file);
// ������� ������ ����� ���������� �������
imagedestroy($img);
imagedestroy($photo);
echo "ok";
/* Read the image */
$im = new imagick( "test_images.jpg" );
/* create the thumbnail */
$im->cropThumbnailImage( 500, 500 );
/* Write to a file */
$im->writeImage( "th_test_images3.jpg" );

echo "ok2";