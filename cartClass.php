<!-- 
	Name: Daniel
	Surname: Howard
	Student Number: 16000911
	Declaration:
	This is my own code and any code from other sources will be referenced.

	ShoppingCart class has been created on the basis of Larry Ullman's example - http://www.peachpit.com/articles/article.aspx?p=1962481&seqNum=2
-->

<?php  

include('itemClass.php');

	class ShoppingCart
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

		public function addItem ($item) 
		{
			//iten id required for add
			$id = $item->getItemID();

				if (!$id ) {
					echo "Cart requires unique item id";
				}
				$this->cartItems[] = $item;
				//should be an array of orderline not items
				//that should look like orderline table exactly

				//check if theres an item with that id already then call updateItem else add item to cart
				// if (isset($this->cartItems[$id])) {
				// 	$this->updateItem($item, $this->cartItems[$id]['qty'] + 1);
				// }else {
				// 	$this->cartItems[$id] = array('item' => $item, 'qty' => 1);
				// 	$this->ids[] = $id;
				// }

		}

		public function removeItem($item){
			$id = $item->getItemID();

			if (!$id) {
				echo "Cart requires unique item Id";
			}
			unset($this->cartItems[$id]);
		}

		public function updateItem($item, $qty){

			$id = $item->getItemID();

			//delete or update quantity based on qty
			if ($qty === 0) {
				$this->deleteItem($item);
			}elseif (($qty>0) && ($qty != $this->cartItems[$id]['qty'])) {
				$this->cartItems[$id]['qty'] = $qty;
			}
		}

		public function deleteItem($item){
			$id = $item->getItemID();

				//item deleted by idS
			if (isset($this->cartItems[$id])) {
				unset($this->cartItems[$id]);
			}

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