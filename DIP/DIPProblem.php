<?php

namespace DIP\Problem;

class PDFBook 
{
    public function read()
    {
        # code...
    }
}

class EBookReader
{
    private PDFBook $pdfBook;

    public function __construct(PDFBook $pdfBook) {
        $this->pdfBook = $pdfBook;
    }

    public function read()
    {
        $this->pdfBook->read();
    }
}
