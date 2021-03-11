<?php require 'db/db.php'; ?>

<?php
$succes_registration = '';

if ( isset( $_POST['register'] ) ) {

    $data = $_POST;

    $errors = [];

    if ( trim( $data['login'] == '' ) ) {
        $errors[] = 'Введите имя пользователя';
    }
    if ( $data['password'] == '' ) {
        $errors[] = 'Введите пароль';
    }
    if ( $data['password2'] == '' ) {
        $errors[] = 'Введите повторный пароль';
    }

    if ( $data['password'] != $data['password2'] ) {
        $errors[] = 'Пароли не совпадают';
    }
    if ( R::count( 'users', "login = ?", array( $data['login'] ) ) > 0 ) {
        $errors[] = 'Данный пользователь уже зарегистриорван';
    }

    if ( empty( $errors ) ) {
        $user              = R::dispense( 'users' );
        $user->login       = $data['login'];
        $user->password    = password_hash( $data['password'], PASSWORD_DEFAULT );
        $user->loginstatus = 0;
        $user->lastlogin   = date( "Y-m-d H:i:s" );

        R::store( $user );
        $succes_registration = "Вы успешно зарегистрированы";
        //  header('Location: index.php');


    }


}
require_once 'views/signUpView.php';

?>


