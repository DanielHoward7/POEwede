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
include('orderLine.php');

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
			//item id required for add
			$id = $item->getItemID();

				if (!$id ) {
					echo "Cart requires unique item id";
				}
				foreach ($this->cartItems as $cartItem) {
					$currentItem = $cartItem->getItem();

					if ($currentItem->getItemDesc() === $item->getItemDesc()) {
						$cartItem->increment();
						return; 
					}
				}
				$orderline = new OrderLine($item);
				$this->cartItems[] = $orderline;
		}

		public function removeItem($item){
			$id = $item->getItemID();

			if (!$id) {
				echo "Cart requires unique item Id";
			}
			foreach ($this->cartItems as $i => $cartItem ) {
					$currentItem = $cartItem->getItem();

					if ($currentItem->getItemDesc() === $item->getItemDesc()) {
						$cartItem->decrement();
						

						if ($cartItem->getQty() <= 0) {
							unset($this->cartItems[$i]);
						}		
						return;
					}

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