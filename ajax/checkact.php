<?php

include '../db/Messages.php';

$end_session  = 60 * 5;
$login_status = new Messages();
$data_now     = ( date( "Y-m-d H:i:s" ) );

$users = $login_status->getAllusers();

foreach ( $users as $user ) {

	$second_time_left = strtotime( $data_now ) - strtotime( $user->lastlogin ) . '<br>';
	echo $second_time_left;

	if ( $second_time_left > $end_session ) {
		$login_status->setLogin( $user->login );
		$login_status->changeLoginStatus();
	}
}

?>