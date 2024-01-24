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

	public function getDetails()
	{
		return "judul : {$this->judul}\npenerbit : {$this->penerbit}\npenulis : {$this->penulis}\ngenre : {$this->genre}\n";
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

class Biograpy extends Buku
{
	public function getDetail() //overriding to access parent's method
	{
		return "Detail Buku Yang anda pilih \n" . parent::getDetails();
	}
}


$myNovel = new Novel('senja berlari', 'hidayat', 'Xcelent ltd', 'action');
print($myNovel->getInfoPenulis());

$myBiograpy = new Biograpy('perjalanan OWP', 'syarif', 'mediaku', 'romance');

print($myBiograpy->getDetail());
