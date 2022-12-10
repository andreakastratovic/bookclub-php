
<?php

class Korisnik{
    public $id;
    public $username;
    public $password;

    public function __construct($id=null,$username=null,$password=null){
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    public static function login($korisnik,mysqli $conn){
        $query = "SELECT * FROM bookclubusers WHERE username='$korisnik->username' AND password='$korisnik->password'";
        return $conn->query($query);
    }
}


?>