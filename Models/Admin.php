<?php
    namespace Models;
    class Admin{
        private $email;
        private $password;

        public function __construct()
        {
            
        }

        public function getEmail(){
            return $this->email;
        }
    
        public function setEmail($email){
            $this->email = $email;
        }
    
        public function getPassword(){
            return $this->password;
        }
    
        public function setPassword($password){
            $this->password = $password;
        }
    }
?>