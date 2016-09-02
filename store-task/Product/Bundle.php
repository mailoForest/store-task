<?php

namespace Product;

class Bundle extends Product
{
	private $containingProducts = [];
	
	public function __construct($name, $quantity)
	{
		parent::__construct($name, $price = null, $quantity);
	}
	
	public function getPrice()
	{
		$tottalPrice = 0;
		foreach ($this->containingProducts as $product) {			
			$tottalPrice += $product->getPrice() * $product->getQuantity(); // 10% discount
		}
		return $tottalPrice;
	}
	
	public function addProduct(Product $product, $productQuantity)
	{	
		$product = clone $product;
		$product->setQuantity($productQuantity);
		
		$this->containingProducts[] = $product;
		
		$this->setPrice($this->getPrice());
	}
}
