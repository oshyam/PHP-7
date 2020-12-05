<?php
class User{
    private $username;
    private $email;

    public function __construct($username,$email){
        $this->username=$username;
        $this->email=$email;
    }
}

$getUserEmail = function(){
    return $this->username.'s email is '. $this->email;
};

$user = new User('Jhon Doe','JhonDoe@cyberncode.com');

echo $getUserEmail->call($user);

?>