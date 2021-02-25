<?php

require 'db/db.php';

$user = R::findOne('users', "login = ?",  array($_SESSION['logget_user']->login ));
$user->loginstatus = 0;
R::store( $user );
unset($_SESSION['logget_user']);
header('Location: index.php');