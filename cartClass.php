<!-- 
	Name: Daniel
	Surname: Howard
	Student Number: 16000911
	Declaration:
	This is my own code and any code from other sources will be referenced.

	ShoppingCart class has been created on the basis of Larry Ullman's example
-->

<?php  

include("dbConn.php");

session_start();

	class ShoppingCart implements Iterator, Countable
	{
		//array of items in the cart
		protected $cartItems = array();
		
		//iteration tracking
		protected $position = 0;

		//for storing ids
		protected $ids = array();
		
		public function __construct()
		{
			$this->items = array();
			$this->ids = array();

		}

		public function getCartContents() {
			$cart = $this->cartItems;

			return $cart;
		}


		public function getItems(){

			return $this->cartItems;
		}

		public function addItem (Item $item) 
		{
			//iten id required for add
			$id = $item->getID();

				if (!$id ) {
					echo "Cart requires unique item id";
				}
				//check if theres an item with that id already then call updateItem else add item to cart
				if (isset($this->cartItems[$id])) {
					$this->updateItem($item, $this->cartItems[$item]['qty'] + 1);
				}else {
					$this->cartItems[$id] = array('item' => $item, 'qty' => 1);
					$this->ids[] = $id;
				}

		}

		public function updateItem(Item $item, $qty){

			$id = $cartItems->getID();

			//delete or update quantity based on qty
			if ($qty === 0) {
				$this->deleteItem($item);
			}elseif (($qty>0) && ($qty != $this->cartItems[$id]['qty'])) {
				$this->cartItems[$id]['qty'] = $qty;
			}
		}

		public function deleteItem(Item $item){
			$id = $item->getID();

				//item deleted by idS
			if (isset($this->cartItems[$id])) {
				unset($this->cartItems[$id]);

				//id value deleted as well
				$index = array_search($id, $this->ids);
				unset($this->ids[$index]);
				//recreate to fill holes
				$this->ids = array_values($this->ids);
			}

		}

		//Iterator methods
		// returns current value
		public function current(){

			//get index for current position
			$index = $this->ids[$this->position];

			//returns item at index
			return $this->items[$index];
		}
		// returns current position
		public function key(){
			return $this->position;
		}
		//increments position
		public function next() {
			$this->position++;
		}
		//resets position
		public function rewind(){
			$this->position = 0;
		}
		//returns bool if value exists at that position
		public function valid(){
			return (isset($this->ids[$this->position]));
		}
		//count unique items
		public function count(){
			return count($this->cartItems);
		}

		// Check if the cart is empty
		public function isEmpty() {
			return (empty($this->cartItems));
		}


		//Get the total of items in the cart
		public function getTotalItems () {
			return sizeof($cartItems);
		}

			//empty cart
		public function clearCart() {
		$this->cartItems = [];
		}
	}


?>