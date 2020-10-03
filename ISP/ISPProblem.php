<?php

namespace ISP\Problem;

interface ITelephone 
{
    public function ring();
    public function call();
    public function takePicture();
}

class SmartPhone implements ITelephone
{
    public function ring() { /* ... */ }
    public function call()  { /* ... */ }
    public function takePicture()  { /* ... */ }
}

class Nokia3320 implements ITelephone
{
    public function ring() { /* ... */ }
    public function call()  { /* ... */ }
    public function takePicture()  { /* It doesn't work */ }
}
