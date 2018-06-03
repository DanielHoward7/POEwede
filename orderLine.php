<?php 

 /**
  *  
  */
 class OrderLine 
 {
 	private $item;
 	private $quantity;
 	function __construct($item)
 	{
 		$this->item=$item;
 		$this->quantity=1;
 	}

 	public function getItem(){
 		return $this->item;
 	}

 	public function getQty(){
 		return $this->quantity;

 	}

 	public function increment(){

 		$this->quantity++;
 	}

 	public function decrement(){
 		$this->quantity--;
 	}

 	//gets and sets

 	//do increment and decrement quantity
 
 }

 ?>