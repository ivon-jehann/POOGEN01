<?php

class CLient
{
    protected $nom;
    protected $password;
    protected $email;

    public function __construct(string $nom) {
        $this->nom = $nom;
    }

    public function setEmail(string $email): void {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        }else {
            echo "L'adresse email n'est pas valide.";
        }
    }

    public function setPassword(string $password): void {
        if (strlen($password) >= 6) {
            $this->password = $password;
        }else{
            echo "Le mot de passe doit faire plus de 6 caractères.";
        }
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPassword(): ? string
    {
        return password_hash($this->password, PASSWORD_DEFAULT);
    }

    public function getEmail(): ? string
    {
        return $this->email;
    }
}