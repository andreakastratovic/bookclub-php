<?php

class Rezervacija{
    public $rezervacija_id;
    public $id;
    public $bookid;


    public function __construct($rezervacija_id=null,$id=null,$bookid=null){
        $this->rezervacija_id = $rezervacija_id;
        $this->id = $id;
        $this->bookid = $bookid;
    }

    public static function addRezervacija(mysqli $conn){
        $q = "INSERT INTO rezervacije VALUES ";
    }
}


?>