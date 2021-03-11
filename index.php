<?php
require 'db/db.php';
require 'db/Messages.php';

$data_users = new Users();


if ( ! isset( $_SESSION['logget_user'] ) ) {


	header( 'Location: login.php' );

} else {

	$data_users->setLogin( $_SESSION['logget_user']->login );
	$log_status = $data_users->getStatus();

	if ( $log_status == 0 ) {
		unset( $_SESSION['logget_user'] );
		header( 'Location: login.php' );
	} else {

		$user_data = $_SESSION['logget_user'];


		$data_users->setlogin( $user_data->login );
		$data_users->setLastLogin( date( "Y-m-d H:i:s" ) );
		$data_users->setLastactivity();

		require_once 'views/indexView.php';
	}

}