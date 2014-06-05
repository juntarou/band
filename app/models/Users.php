<?php

class Users extends Phalcon\Mvc\Model
{

    public $id;

    public $name;

    public $created_at;

    public $updated_at;

    public $deleted_at;

    public function initialize() {

        $this->hasOne('id', 'UserAuth', 'user_id');

    }

}
