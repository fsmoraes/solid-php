<?php

namespace SRP;

use PDO;

class Employee
{
    private string $name;
    private float $salary;

    public function connection()
    {
        return new PDO("");       
    }

    public function create()
    {
        $this->connection()->exec("insert ...");
    }

    public function update()
    {
        $this->connection()->exec("update ...");
    }

    public function getById(int $id)
    {
        $this->connection()->exec("select ...");
    }

    public function getName()
    {
        return $this->name;
    } 

    public function setName(string $name)
    {
        return $this->name = $name;
    }

    public function getSalary()
    {
        return $this->salary;
    } 

    public function setSalary(float $salary)
    {
        return $this->salary = $salary;
    }
}
