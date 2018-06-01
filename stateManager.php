	<?php 
	session_start();

include('userClass.php');
include_once('cartClass.php');


	function serializeItem($item){
		$serialItem = addslashes(serialize($item));
		return $serialItem;
	}

	function loadItem($serialItem){
		$item = unserialize(stripslashes($serialItem));

		return $item;
	}

	function saveCart($ShoppingCart, $user){
      $_SESSION[$user->getUserName()] = addslashes(serialize($ShoppingCart));
	}

	function loadCart($user){

		$cart = new ShoppingCart();

		if (isset($_SESSION[$user->getUserName()])) {
		
			$cart = unserialize(stripslashes($_SESSION[$user->getUserName()]));
		}
		
		return $cart;
	}

	function saveUser($user){
		$sesh_id = $_COOKIE['PHPSESSID'];
      $_SESSION[$sesh_id] = addslashes(serialize($user));
	}

	function loadUser(){
		$sesh_id = $_COOKIE['PHPSESSID'];
		
		return unserialize(stripslashes($_SESSION[$sesh_id]));
	}

	function loggedIn(){

		$user = loadUser();

		if ($user) {
			return true;
		}
		return false;
	}

	function logout(){

		$_SESSION = array();

	}
?>