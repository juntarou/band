<?php

class UserAuth extends Phalcon\Mvc\Model
{

    public $id;

    public $user_id;

    public $account;

    public $mail;

    public $password;

    public $created_at;

    public $updated_at;

    public $deleted_at;

    public $temp_txt;


    public function initialize() {

    }


}
