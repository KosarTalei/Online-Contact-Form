<?php
class CartItem
{
	private $_itemName;
    private $_quantity;
    private $_price;
    private $_productID;
    //optional photo

    //constructor
    public function __construct($itemName, $quantity, $price, $productID)
    {
    	$this->_itemName = $itemName;
    	$this->_quantity = (int)$quantity;
    	$this->_price = (float)$price;
    	$this->_productID = (int)$productID;
    }
    
    //get quantity
    public function getQuantity()
    {
    	return $this->_quantity;
    }

    //set quantity
    public function setQuantity($value)
    {
        if($value >= 0)
        {     	
            $this->_quantity = (int)$value;
        }
        else
        {
            throw new Exception("Quantity must be positive");
        }
    }

    //get price
    public function getPrice()
    {
    	return $this->_price;
    }

    //get Item ID
    public function getItemId()
    {
    	return $this->_productID;
    }

    //get Item name
    public function getItemName()
    {
        return $this->_itemName;
    }
}
?>