<?php

//Class is like cetakan or blueprint

class Book
{
    // properties
    public $title;
    public $author;
    public $year;

    // method is function in the class
    public function getTitle()
    {
        return "$this->title";
    }
}


//we can make Object form 'blueprint'with instance use 'new' 
$novel = new Book();
// set manually
$novel->title = 'Cara Koding';
$novel->author = 'Syarifh';
$novel->year = 2023;

//to access properties
echo ('buku ' . $novel->title . ' ditulis oleh ' . $novel->author . ' pada tahun ' . $novel->year . "\n");
//to use method
echo ('buku ini berjudul ' . $novel->getTitle() . "\n");

//we can also reuse the blueprint to make another Objectc
$biography = new Book();

$biography->title = 'Perjuangan OWP';
$biography->author = 'syarifh';
$biography->year = '2020';

echo ('buku ini biografi tentang ' . $biography->getTitle());
