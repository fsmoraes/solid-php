<?php

namespace OCP\Problem;

use Exception;
use SRP\Employee;

class EmployeeSalaryCalculator
{

    public function calc(string $type, Employee $employee) 
    {
        if ($type == "dev") {
            $discount = $employee->getSalary() * 0.10;
        } else if ($type == "pm") {
            $discount = $employee->getSalary() * 0.20;
        } else if ($type == "ceo") {
            $discount = $employee->getSalary() * 0.30;
        } else {
            throw new Exception("invalid employee type");
        }
    }
}
