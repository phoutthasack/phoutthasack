<?php
function ketnoi()
{
	$link = mysqli_connect('localhost','root','');
	$db = mysqli_select_db($link,'post_img');
	mysqli_query($link,"SET NAMES utf8");
	return $link;
	
}
?>