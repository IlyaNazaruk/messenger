<?php
require 'Users.php';

class Messages extends Users
{
    private $message;
    private $time;


    public function setMessage ($message){
        $this->message = $message;
    }

    public function getMessage (){
        return $this->message;
    }

    public function __construct()
    {
        require_once 'db.php';
        $this->setLogin($_SESSION['login']);

    }
//date("Y-m-d H:i:s")

    private function getTime(){
        $this->time=date("Y-m-d H:i:s");
    }



    public function saveMessage(){

        $this->getTime();
        $send_message = R::dispense('message');
        $send_message->login = $this->login;
        $send_message->message = $this->message;
        $send_message->time = $this->time;
        R::store($send_message);

    }

    public function getMessages(){
        return R::findAll('message', ' ORDER BY id DESC LIMIT 20 ');
    }
}