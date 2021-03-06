<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/myscript.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <p class="h2 text-center">Регистрация</p>


            <form action="signup.php" method="post">


				<?php
				if ( ! empty( $errors ) ) {

					echo '<div style="color: red">' . array_shift( $errors ) . '</div>';
				} ?>

                <div class="mb-3 pt-2">
                    <label>Введите имя пользователя:</label>
                    <input type="text" class="form-control" name="login" value="<?php echo @$data['login'] ?>">

                </div>
                <div class="mb-3">
                    <label>Введите пароль:</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <div class="mb-3">
                    <label>Введите пароль:</label>
                    <input type="password" class="form-control" name="password2">
                </div>

                <button type="submit" class="btn btn-primary" name="register">Зарегистрироваться</button>


            </form>

			<?php if ( $succes_registration === '' ): ?>
                <div class="register pt-4"><p class="text-center"><a href="login.php">Перейти на страницу
                            авторизации</a></p></div>


			<?php else: ?>

                <div class="register pt-4"><p class="text-center">Вы успешно зарегистрированы. <a href="login.php">Перейти
                            на страницу авторизации</a></p></div>

			<?php endif; ?>

        </div>
        <div class="col-sm">

        </div>
    </div>
</div>


</body>
</html>