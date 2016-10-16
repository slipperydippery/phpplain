<?php

class Address {

}

interface Addressable {
	public function setAddress(Address $address);
	public function getAddress();

}

trait AddressAccessor {
	protected $address;

	public function setaddress(Address $address)
	{
		$this->address = $address;
	}

	public function getaddress()
	{
	}
}

class User {

	use AddressAccessor;

	public function __construct(Address $address)
	{
		$this->address = $address;
	}
}

class Company implements Addressable{

	use AddressAccessor;

	public function __construct(Address $address)
	{
		$this->address = $address;
	}
}

class PackageShippper {
	public function shipTo(User $user)
	{
		$address = $user->getaddress();
	}
}

