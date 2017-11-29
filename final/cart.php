<?php
require_once("config.php");
require_once("database.php");

$page = 'single.php';

$database->products();

if(isset($_GET['add']))
{
	$quantity = $database->query("SELECT id, quantity FROM products WHERE id=".$database->escape_string((int)$_GET['add']));
	while($quantity_row = $quantity->fetch_array(MYSQLI_ASSOC))
	{
		if($quantity_row['quantity'] != $_SESSION['cart_'.(int)$_GET['add']])
		{
			$_SESSION['cart_'.(int)$_GET['add']]+='1';

		}
	}	

	header('Location: '.$page); 
}

if(isset($_GET['remove']))
{
	$_SESSION['cart_'.(int)$_GET['remove']]--;
	header('Location: '.$page);
}

if(isset($_GET['delete']))
{
	$_SESSION['cart_'.(int)$_GET['delete']]='0';
	header('Location: '.$page);
}

$database->cart();
?>