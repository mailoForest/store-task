<?php

namespace Product;

class Product
{
	protected  $name;
	protected  $price;
	protected  $quantity;
	
	public function __construct($name, $price, $quantity)
	{
		$this->name = $name;
		$this->price = $price;
		$this->quantity = $quantity;
	}
	
	public function load($quantity)
	{
		$this->quantity += $quantity;
	}
	public function sell($quantity)
	{
		$this->quantity -= $quantity;
	}
	
	public function getPrice() {
		return $this->price;
	}
	public function setPrice($price) {
		$this->price = $price;
	}
	public function getQuantity() {
		return $this->quantity;
	}
	protected function setQuantity($productQuantity) {
		$this->quantity = $productQuantity;
	}
}