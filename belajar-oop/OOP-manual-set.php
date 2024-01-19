<?php
class Book
{
    // properties
    public $title;
    public $author;
    public $year;

    // method
    public function getTitle()
    {
        return "$this->title";
    }
}
// instance
$novel = new Book();
// set manually
$novel->title = 'Cara Koding';
$novel->author = 'Syarifh';
$novel->year = 2023;

var_dump($novel);
echo ('buku ' . $novel->title . ' ditulis oleh ' . $novel->author . ' pada tahun ' . $novel->year);

echo ('buku ini berjudul ' . $novel->getTitle());


$biography = new Book();

$biography->title = 'Perjuangan OWP';
$biography->author = 'syarifh';
$biography->year = '2020';

echo ('buku ini biografi tentang ' . $biography->getTitle());
