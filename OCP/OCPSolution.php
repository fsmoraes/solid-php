<?php

namespace OCP\Solution;

use SRP\Employee;

abstract class EmployeeSalaryCalculator
{
    public abstract function calc(Employee $employee);
}

class DevEmployeeSalaryCalculator extends EmployeeSalaryCalculator
{
    public function calc(Employee $employee)
    {
        $discount = $employee->getSalary() * 0.10;
    }
}

class PMEmployeeSalaryCalculator extends EmployeeSalaryCalculator
{
    public function calc(Employee $employee)
    {
        $discount = $employee->getSalary() * 0.20;
    }
}

class CEOEmployeeSalaryCalculator extends EmployeeSalaryCalculator
{
    public function calc(Employee $employee)
    {
        $discount = $employee->getSalary() * 0.30;
    }
}
