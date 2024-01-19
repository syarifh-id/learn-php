<?php

class Film
{

	public $title, $actor, $year;

	public function __construct($title, $actor, $year)
	{

		$this->title = $title;
		$this->actor = $actor;
		$this->year = $year;
	}
}


//class to show another class

class ShowFilm
{
	public function show(Film $theFilm) //'Film' its mean the argument only fron Film instance
	{
		$film = "{$theFilm->title} by {$theFilm->actor} relase on {$theFilm->year}";
		return $film;
	}
}

$favFilm = new Film('Pacific Rim', 'Gipsy', 2013);
var_dump($favFilm);




//instance the Film
$myFilm = new Film('The Code', 'Syarif', 2023);
//instance Show film
$getfilm = new ShowFilm();

echo ($getfilm->show($myFilm));
