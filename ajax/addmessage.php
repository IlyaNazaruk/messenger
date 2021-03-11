<?php


if ( ( $_POST ) ) {


	include '../db/Messages.php';


	$message   = $_POST['message'];
	$name_user = $_POST['name_user'];

	$send_message = new Messages();

	$send_message->setMessage( $message );
	$send_message->getLogin();
	$send_message->saveMessage();
	$message_arr = $send_message->getMessages();

	$send_message->setLogin( $_SESSION['login'] );
	$send_message->setLastLogin( date( "Y-m-d H:i:s" ) );
	$send_message->setLastactivity();

}

?>

<?php foreach ( $message_arr as $message_arr_item ): ?>
    "
    <tr>
        <td><b><?php echo $message_arr_item->login; ?></b><br><?php echo $message_arr_item->message; ?></td>
    </tr>"
<?php endforeach; ?>
