<?php

require_once("config.php");
include_once ("common.inc.php");

class Database 
{

	public $connection;

	function __construct() 
	{
		$this->open_db_connection();
	}

	public function open_db_connection() 
	{
		$this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if($this->connection->connect_errno) 
		{ 
			die("Database connection failed".$this->connection->connect_errno);
		}
	}

	public function query($sql) 
	{
		$result = $this->connection->query($sql);
		$this->confirm_query($result);

		if(!$result) {
			die("Query failed");
		}

		return $result;
	}	

	public function confirm_query($result) 
	{
		if(!$result) {
			die("Query Failed" .$this->connection->error);
		}
	}

	public function escape_string($string) 
	{
		$escape_string = $this->connection->real_escape_string($string);
		return $escape_string;
	} 

	public function products()
	{
		$get = $this->query("SELECT id, name, description, price FROM products WHERE quantity > 0 ORDER BY id ASC");

		$rc = $get->num_rows;

		if($rc == 0)
			echo "There are no products to display!";

		else
		{
			while ($row = $get->fetch_array(MYSQLI_ASSOC)) 
			{
				//echo '<p>'.$row['name'].'<br/>'.'&#36;'.$row['price'].' <a href="cart.php?add='.$row['id'].'">Add To Cart </a>';
				echo '<table style="border-collapse:collapse; border: 3px solid black; border-bottom: 0;">
		            <tr><td><a href="cart.php?add='.$row['id'].'" style="text-decoration: none; color: black;"><button class="button button7">Add To Cart</button></a></td></tr></table>';
			} 
		}
	}

	public function products_two()
	{
		$get = $this->query("SELECT id, name, description, price FROM boxes WHERE quantity > 0 ORDER BY id ASC");

		$rc = $get->num_rows;

		if($rc == 0)
			echo "There are no products to display!";

		else
		{
			while ($row = $get->fetch_array(MYSQLI_ASSOC)) 
			{
				//echo '<p>'.$row['name'].'<br/>'.'&#36;'.$row['price'].' <a href="cart.php?add='.$row['id'].'">Add To Cart </a>';
				echo '<a href="cart_two.php?add='.$row['id'].'"><button class="button button5">Add To Cart </button></a>';
				
			} 
		}
	}

	public function paypal_items()
	{
		$num = 0;

		foreach ($_SESSION as $name => $value) 
		{
			if($value != 0)
			{
				if(substr($name, 0, 5)=='cart_')
				{
					$id = substr($name, 5, strlen($name)-5);
					$get = $this->query('SELECT id, name, price, shipping FROM products WHERE id='.$this->escape_string((int)$id));
					while ($row = $get->fetch_array(MYSQLI_ASSOC)) 
					{
					
						$num++;

						echo '<input type="hidden" name="item_number_'.$num.'" value="'.$id.'">';

						echo '<input type="hidden" name="item_name_'.$num.'" value="'.$row['name'].'">';

						echo '<input type="hidden" name="amount_'.$num.'" value="'.$row['price'].'">';

						echo '<input type="hidden" name="shipping_'.$num.'" value="'.$row['shipping'].'">';

						echo '<input type="hidden" name="quantity_'.$num.'" value="'.$value.'">';
					}
				}
			}
		}
	}

	public function cart()
	{
		global $total;

		foreach ($_SESSION as $name => $value) 
		{
			if($value > 0)
			{
				if(substr($name, 0, 5)=='cart_')
				{
					$id = substr($name, 5, (strlen($name)-5));

					$q1 = $this->query("SELECT id, name, price, shipping, quantity FROM products WHERE id=".$this->escape_string((int)$id));

					while ($get_q1 = $q1->fetch_array(MYSQLI_ASSOC)) 
					{

						$sub = ($get_q1['price'] * $value) + $get_q1['shipping'];

						$total += $sub;

						$qty = $get_q1['quantity'];

						//echo '<br>'.$get_q1['name'].' x '.$value.' @ &#36;'.number_format($get_q1['price'], 2).' = &#36;'.number_format($sub, 2);

					    echo '<table style="border-collapse:collapse; border: 3px solid black;">
		<tr style="border: 3px solid black;">
			<td style="border: 3px solid black; padding-left: 40px;	padding-right: 40px; padding-top: 20px; padding-bottom: 20px;" >
				<a href="cart.php?add='.$id.'"><img src="upa.png"></a><br><br><a href="cart.php?remove='.$id.'"><img src="down.png"></a>
			</td>
			<td style="width: 100px; border: 3px solid black; font-family: Impact; font-size: 22px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$value.'</td>
			<td style="width: 100px; border: 3px solid black; font-family: Impact; font-size: 22px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $ '.$total.'</td>
		</tr>
	</table>';
			//'<a href="cart.php?delete='.$id.'">[Delete]</a><br/>';	*/

					}
				}
				//$total += $sub;				
			}			
		}

		if($total == 0)
			echo "<table style='border-collapse:collapse; border: 3px solid black;'>
		            <tr>
					<td style='padding-left: 94px; padding-right: 94px; padding-top: 20px; padding-bottom: 20px;'>
						<p>Your cart is empty!</p>
					</td></tr>
			</table>";

		else
		{
			//echo "<p>Total: &#36;".number_format($total, 2).'</p>';
		?>
		<!--<p>
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="cmd" value="_cart">		
        <input type="hidden" name="upload" value="1">
		<input type="hidden" name="business" value="adesilva@hotelemporium.com">
		<?php// $this->paypal_items(); ?>
		<input type="hidden" name="currency_code" value="USD">
		<input type="hidden" name="amount" value="<?php $total; ?>">
		<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but03.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
		</form>
		</p>

	    -->

		<?php
		}
	} 

	public function cart_two()
	{
		global $total;

		foreach ($_SESSION as $name => $value) 
		{
			if($value > 0)
			{
				if(substr($name, 0, 5)=='cart_')
				{
					$id = substr($name, 5, (strlen($name)-5));

					$q1 = $this->query("SELECT id, name, price, shipping FROM boxes WHERE id=".$this->escape_string((int)$id));

					while ($get_q1 = $q1->fetch_array(MYSQLI_ASSOC)) 
					{

						$sub = ($get_q1['price'] * $value) + $get_q1['shipping'];

						$total += $sub;

						//echo '<br>'.$get_q1['name'].' x '.$value.' @ &#36;'.number_format($get_q1['price'], 2).' = &#36;'.number_format($sub, 2);

					    echo '<table style="border-collapse:collapse; border: 3px solid black;">
		<tr style="border: 3px solid black;">
			<td style="border: 3px solid black; padding-left: 40px;	padding-right: 40px; padding-top: 20px; padding-bottom: 20px;" >
				<a href="cart.php?add='.$id.'"><img src="upa.png"></a><br><br><a href="cart.php?remove='.$id.'"><img src="down.png"></a>
			</td>
			<td style="border: 3px solid black; padding-left: 34px; padding-right: 34px; padding-top: 20px; padding-bottom: 20px; font-family: Impact; font-size: 22px;">'.$value.'</td>
			<td style="border: 3px solid black; padding-left: 40px; padding-right: 40px; padding-top: 20px; padding-bottom: 20px; font-family: Impact; font-size: 22px;"> $ '.$total.'</td>
		</tr>
	</table>';
			//'<a href="cart.php?delete='.$id.'">[Delete]</a><br/>';	*/

					}
				}
				//$total += $sub;				
			}			
		}

		if($total == 0)
			echo "Your cart is empty!";

		else
		{
			//echo "<p>Total: &#36;".number_format($total, 2).'</p>';
		?>
		<!--<p>
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="cmd" value="_cart">		
        <input type="hidden" name="upload" value="1">
		<input type="hidden" name="business" value="adesilva@hotelemporium.com">
		<?php// $this->paypal_items(); ?>
		<input type="hidden" name="currency_code" value="USD">
		<input type="hidden" name="amount" value="<?php $total; ?>">
		<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but03.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
		</form>
		</p>

	    -->

		<?php
		}
	}

	



}


$database = new Database();

?>