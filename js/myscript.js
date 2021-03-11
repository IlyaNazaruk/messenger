$(document).ready(function () {


    setInterval(function () {
        get_chat_history();
        chek_activity();
        show_users();

    }, 1000);


    function get_chat_history() {


        $.ajax({
            url: 'ajax/getlastmsg.php',
            method: "post",

            success: function (data) {
                $('.table_msg').html('');
                $(".message-table").prepend(data);
            }
        })

    }

    function chek_activity() {
        $.ajax({
            url: 'ajax/checkact.php',
            method: "post",

            success: function () {

            }
        })

    }

    function show_users() {
        $.ajax({
            url: 'ajax/showusers.php',
            method: "post",

            success: function (data) {
                $(".show-users").html(data);
            }
        })

    }


    $('.send-message').click(function () {
        message = $('.msg-text').val();
        name_user = $('.name-user').html();

        if (message != '') {

            //$(".messages-window").scrollTop();
            // $("div.content").scrollTop(30);

            $('.msg-text').val('');

            $.ajax({
                url: 'ajax/addmessage.php',
                method: 'post',
                dataType: 'html',
                data: {
                    message: message,
                    name_user: name_user,
                },
                success: function (data) {
                    // alert(data);
                    $('.table_msg').html('');

                    $(".message-table").prepend(data);


                }
            });

        }

    });

});

