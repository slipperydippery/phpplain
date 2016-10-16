<?php

namespace ShirtSale;

interface ShirtSale {
	public function getCost();
}

class BasicPurchase implements ShirtSale {
	public function getCost()
	{
		return 5;
	}
}

class ShortSleeve implements ShirtSale {
	protected $shirtSale;

	public function __construct (ShirtSale $shirtSale)
	{
		$this->shirtSale = $shirtSale;
	}

	public function getCost()
	{
		return 30 + $this->shirtSale->getCost();
	}
}

class LongSleeve implements ShirtSale {
	protected $shirtSale;

	public function __construct (ShirtSale $shirtSale)
	{
		$this->shirtSale = $shirtSale;
	}

	public function getCost()
	{
		return 25 + $this->shirtSale->getCost();
	}
}

$thisSale = new LongSleeve(new LongSleeve(new BasicPurchase()));
echo $thisSale->getCost();