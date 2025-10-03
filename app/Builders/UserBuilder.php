<?php

namespace App\Builders;

use App\Models\User;

class UserBuilder
{
    private ?string $name = null;
    private ?string $email = null;
    private ?string $password = null;

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setPassword(string $password): self
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        return $this;
    }

    public function build(): User
    {
        if ($this->name === null || $this->email === null || $this->password === null) {
            throw new \Exception("Name, email y password son obligatorios");
        }

        return new User($this->name, $this->email, $this->password);
    }

    public function reset(): self
    {
        $this->name = null;
        $this->email = null;
        $this->password = null;
        return $this;
    }
}