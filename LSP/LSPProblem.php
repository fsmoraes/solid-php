<?php

namespace LSP;

class BankAccount 
{
    public function charge()
    {
        // code...
    }
}

class FreeBankAccount implements BankAccount
{
    public function charge()
    {
        // It doesn't work 
    }
}


class Bird 
{
    public function fly()
    {
        // code...
    }
}

class Penguin implements Bird
{
    public function fly()
    {
        // It doesn't work
    }
}
