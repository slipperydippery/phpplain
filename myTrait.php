<?php

trait Content {
	public function moreContent()
	{
		return $this->content("traitstuff");
	}
}

class MyTrait {

	use Content;

	function content($content = 'empty')
	{
		return "My trait's content is: " . $content;
	}
}