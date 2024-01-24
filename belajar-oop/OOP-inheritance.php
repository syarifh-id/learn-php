<?php

class Buku
{
	public $judul;
	public $penulis;
	public $penerbit;
	public $genre;

	public function __construct($judul, $penulis, $penerbit, $genre)
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->genre = $genre;
	}
};
//Novel is child from Buku, so it can use property from buku
class Novel extends Buku
{
	public function getInfoPenulis()
	{

		return "Buku {$this->judul} ditulis oleh : {$this->penulis} \n";
	}
};




$myNovel = new Novel('senja berlari', 'hidayat', 'Xcelent ltd', 'action');
print($myNovel->getInfoPenulis());
