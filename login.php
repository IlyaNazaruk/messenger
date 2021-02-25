<?php
require 'db/db.php';
$data = $_POST;

?>

<?php
if (isset($data['do_login'])){

    $errors =[];
    $user = R::findOne('users', "login = ?",  array($data['login']));

//print_r($user);
    if ($user){

        if (password_verify($data['password'], $user->password)){
            //echo 'Пароль совпадает';

            $_SESSION['logget_user'] = $user;
            $_SESSION['login'] = $user->login;
            $user->loginstatus = 1;
            $user->lastlogin = date("Y-m-d H:i:s");
            R::store( $user );
            header('Location: index.php');

        }
        else
        {
            $errors[] = 'Введен неверный пароль';
        }

    }
    else {
        $errors[] = 'Пользователь с таким именем не найден';
    }
}

require_once 'views/loginView.php';


?>

