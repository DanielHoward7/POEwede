<!-- 
	Name: Daniel
	Surname: Howard
	Student Number: 16000911
	Declaration:
	This is my own code and any code from other sources will be referenced.
-->

<?php  
	
	class itemClass {

		protected $items = [];
		protected $itemID;
		protected $itemDesc;
		protected $itemPrice;
		protected $itemQuantity;


	public function __construct($id, $desc, $price)	{
		$this->itemID = $id;
		$this->itemDesc = $desc;
		$this->itemPrice = $price;
	}	

	public function getItemID(){

		$this->itemID = $id;

	}

	public function getitemDesc(){
		$this->itemName = $name;
	}

	public function getPrice(){
		return $this->itemPrice;
	}

}


?>