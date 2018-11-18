<?php

class Registration {
    private $name;
    private $email;
    private $password;
    private $confirmPassword;

    public function __construct(Array $data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->confirmPassword = $data['confirmPassword'];
    }

    public function passwordMatch() {
        return $this->password == $this->confirmPassword;
    }

    public function validate() {
        return !empty($this->name) && !empty($this->email) && !empty($this->password)
            && !empty($this->confirmPassword) && $this->passwordMatch();
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getConfirm() {
        return $this->confirmPassword;
    }
}

?>