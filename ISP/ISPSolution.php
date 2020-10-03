<?php

namespace ISP\Solution;

interface ITelephone 
{
    public function ring();
    public function call();
}

interface ISmartPhone extends ITelephone 
{
    public function takePicture();
}

class SmartPhone implements ISmartPhone
{
    public function ring() { /* ... */ }
    public function call()  { /* ... */ }
    public function takePicture()  { /* ... */ }
}

class Nokia3320 implements ITelephone
{
    public function ring() { /* ... */ }
    public function call()  { /* ... */ }
}
