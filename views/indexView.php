<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/myscript.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <style type="text/css">
        .messages-window {
            height: 400px;
            background: whitesmoke;
            overflow: auto;
        }

    </style>
</head>
<body>

<div class="container">
    <p class="h3 text-center pt-3">Наш социальный тестовый чат <span class="h5 pl-5"><a
                    href="logout.php">Выйти из чата</a></span></p>
    <hr>

    <div class="row">
        <div class="col-3">


            <div class="font-weight-bold name-user"> <?php echo $user_data->login; ?></div>
            <hr>
            <div>Участники чата:</div>
            <hr>


            <div class="show-users">

            </div>

        </div>
        <div class="col-9">

            <div class="messages-window">

                <table class="table table-striped table-hover message-table">
                    <thead>
                    <tr>
                        <th scope="col">Наш чат</th>

                    </tr>
                    </thead>
                    <tbody class="table_msg">

                    </tbody>
                </table>
            </div>

            <div class="pb-2 pt-3"><textarea class="form-control pb-2 msg-text" rows="2"></textarea></div>

            <div>
                <button type="button" class="btn btn-primary btn-block send-message">Отправить сообщение</button>
            </div>

        </div>
    </div>

</div>

</body>
</html>
