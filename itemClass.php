<!-- 
	Name: Daniel
	Surname: Howard
	Student Number: 16000911
	Declaration:
	This is my own code and any code from other sources will be referenced.
-->

<?php  
	
	class itemClass {

		private $itemID;
		private $itemDesc;
		private $itemPrice;
		private $itemQuantity;

	public function __construct($id, $desc, $price, $qty)	{
		$this->itemID = $id;
		$this->itemDesc = $desc;
		$this->itemPrice = $price;
		$this->itemQuantity = $qty;
	}	

	public function getItemID(){

		return $this->itemID;
	}

	public function getitemDesc(){
		
		return $this->itemDesc;
	}

	public function getPrice(){
		return $this->itemPrice;
	}
	public function getQuantity(){
		return $this->itemQuantity;
	}

}


?>