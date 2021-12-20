<?php

    class User{
        public $id; 
        public $email;
        public $password;

        public function __construct($id=null, $email=null, $password=null){
            $this->id = $id;
            $this->email = $email;
            $this->password = $password;
        }

        public static function login($user, mysqli $conn)
        {
            $query = "SELECT * FROM korisnik WHERE email='$user->email' AND password = '$user->password'";
            return $conn->query($query);
        }

    }

?>