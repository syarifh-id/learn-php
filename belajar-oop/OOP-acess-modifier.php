<?php


//acess modifer dibutuhkan agar data atau variable yang terimpan pada property tidak dapat diubah secara sembarangan.

class Buku
{
	public $judul;
	public $penulis;
	public $penerbit;
	protected $harga; // agar hanya bsa diakses melalui class atau turunannya

	public function __construct($judul, $penulis, $penerbit)
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
	}

	public function getDetails()
	{
		return "judul : {$this->judul}\npenerbit : {$this->penerbit}\npenulis : {$this->penulis}\n";
	}
};



//Novel is child from Buku, so it can use property from buku
class Novel extends Buku
{
	public $genre;

	public function __construct($judul, $penulis, $penerbit, $genre)
	{
		parent::__construct($judul, $penulis, $penerbit);
		$this->genre = $genre;
	}

	public function getInfoPenulis()
	{

		return "Buku {$this->judul} ditulis oleh : {$this->penulis} \n";
	}

	public function getInfoGenre()
	{
		return "Buku {$this->judul} bergenre {$this->genre}\n";
	}

	public function getDetail() //overriding to access parent's method
	{
		return "Detail Buku Yang anda pilih \n" . parent::getDetails() . "genre : {$this->genre}\n";
	}
};



// another class child of Buku

class Biograpy extends Buku
{
	public $figure;

	public function __construct($judul, $penulis, $penerbit, $figure)
	{
		parent::__construct($judul, $penulis, $penerbit,);
		$this->figure = $figure;
	}

	public function getInfoFigure()
	{
		return "buku biografi berjudul : {$this->judul} menceritakan seorang {$this->figure}";
	}
}




$myNovel = new Novel('senja berlari', 'hidayat', 'Xcelent ltd', 'action');
print($myNovel->getInfoPenulis());
print($myNovel->getInfoGenre());
print($myNovel->getDetail());

$myBiograpy = new Biograpy('perjalanan OWP', 'syarif', 'mediaku', 'Pejuang Internet Indonesia');
print($myBiograpy->getInfoFigure());
