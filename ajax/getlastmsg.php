<?php
include '../db/Messages.php';
$send_message = new Messages();
$message_arr = $send_message->getMessages();

?>

<?php foreach ($message_arr  as $message_arr_item):?>
"<tr><td> <b><?php echo $message_arr_item->login;?></b><br><?php echo $message_arr_item->message;?></td></tr>"
<?php endforeach; ?>

