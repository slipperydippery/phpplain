<?php

namespace SongExploder;

use SongExploder\Song;
use SongExploder\Traits\BurnToCD;
use SongExploder\Interfaces\Verse;
use SongExploder\Interfaces\Chorus;


class MyHit extends Song implements Chorus, Verse {

	use BurnToCD;
	protected $author;

	public function __construct($author, $title)
	{
		parent::__construct($title);
		$this->author = $author;
	}

	public function printauthor()
	{
		echo $this->author;
	}

	public function chorus()
	{
		echo ' this is the chorus';
	}

	public function verse()
	{
		echo ' this is the verse';
	}

}