<?php

namespace SongExploder;

abstract class Song {
	protected $title;

	public function __construct($title)
	{
		$this->title = $title;
	}

	public function printtittle()
	{
		echo $this->title;
	}

}
