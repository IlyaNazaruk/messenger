<?php
require 'libs/rb.php';

R::setup( 'mysql:host=localhost;dbname=messenger',
	'root', '570023Dom!' );

if ( ! R::testConnection() ) {

	exit ( 'Нет подключения к БД' );
}

session_start();
