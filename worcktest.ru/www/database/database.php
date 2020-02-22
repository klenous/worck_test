<?php

$link = mysqli_connect('localhost','root','','test_3');

if(mysqli_connect_errno()){
	echo 'baza oshibka!!('.mysqli_connect_errno().'):'.mysqli_connect_error();
	exit();
}


function get_inf(){
	global $link;


	$sql = "SELECT * FROM ` articles` LIMIT 0, 30 ";

	$result  = mysqli_query($link, $sql);
	$cat = mysqli_fetch_all($result, 1);
	return $cat;
}

