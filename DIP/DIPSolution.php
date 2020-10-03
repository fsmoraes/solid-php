<?php

namespace DIP\Solution;

interface IEbook 
{
    public function read();
}

class PDFBook implements IEbook
{
    public function read()
    {
        # code...
    }
}

class EBookReader
{
    private IEbook $ebook;

    public function __construct(IEbook $ebook) {
        $this->ebook = $ebook;
    }

    public function read()
    {
        $this->ebook->read();
    }
}