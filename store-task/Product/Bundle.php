<?php

namespace Product;

class Bundle extends Product
{
	private $containingProducts = [];
	
	public function __construct($name, $quantity)
	{
		parent::__construct($name, $price = null, $quantity);
	}
	
	protected function createBundlePrice($productQuantity)
	{
		$tottalPrice = 0;
		foreach ($this->containingProducts as $porduct) {
			if (isset($porduct)){
				$tottalPrice += $porduct->getPrice() * $productQuantity * 0.9; // 10% discount
				$porduct->setQuantity($productQuantity);
			}
		}
		$this->price = round($tottalPrice, 2);
		return $tottalPrice;
	}
	
	public function addProductToBundle(Product $product, $productQuantity)
	{	
		$this->containingProducts[] = clone $product;
		
		$this->createBundlePrice($productQuantity);
	}
}