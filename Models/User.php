<?php namespace Models;

class User
{
    private $id;
	private $email;
	private $password;
	private $rol;

    public function __construct($id,$email, $password,$rol){
        $this->id= $id;
        $this->email = $email;
        $this->password = $password;
        $this->rol = $rol;
    }
    
    public function getId()
    {
        return $this->id;
    }

 
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getEmail()
    {
        return $this->email;
    }

 
    public function setEmail($email)
    {
        if(strlen($email)<30 && strlen($email)>2)
        $this->email = $email;
    }

   
    public function getPassword()
    {
        return $this->password;
    }

 
    public function setPassword($password)
    {
        if(strlen($password)<30 && strlen($password)>2)
        $this->password = $password;
    }

    
    public function getRol()
    {
        return $this->rol;
    }

    
    public function setRol($rol)
    {
        $this->rol = $rol;
    }

}

?>