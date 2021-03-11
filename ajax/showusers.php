<?php


include '../db/Messages.php';
$all_users = new Messages();


$_SESSION['login'];
$user_array = $all_users->getAllusers();

foreach ( $user_array as $one_user ) {

	if ( $one_user->login == $_SESSION['login'] ) {
		continue;
	}

	$status = '<i class="fa fa-user-circle " style="color: red"></i>';
	if ( $one_user->loginstatus == 1 ) {
		$status = '<i class="fa fa-user-circle " style="color: green"></i>';
	}

	echo $one_user->login . ' ' . $status . '<br>';
}

