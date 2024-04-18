<?php 

$meal1 = 399.00;
$meal2 = 299.00;
$meal3 = 599.00;
$meal4 = 259.00;
$meal5 = 299.00;
$meal6 = 159.00;

$pl1 = $meal1 * $_GET['meal1'];
$pl2 = $meal2 * $_GET['meal2'];
$pl3 = $meal3 * $_GET['meal3'];
$pl4 = $meal4 * $_GET['meal4'];
$pl5 = $meal5 * $_GET['meal5'];
$pl6 = $meal6 * $_GET['meal6'];

$ttl = $pl1 + $pl2 + $pl3 + $pl4 + $pl5 + $pl6;
$stx = $ttl * 0.05;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ordering.css">
    <link rel="Icon" href="Images/icon.png">
    <title>Karl's Eatery</title>
    <style>
.button {
    background-color: #86B6F6;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 25px;
}
</style>
</head>
<body>
    <div class="brand">
            <p class="fbrand">Karl’s</p>
            <p class="sbrand">Eatery</p>
    </div>
        <table border="1"  align="center" style="border-collapse: collapse; width: 50%; border-color: white;" cellpadding="5" >
		    <form>
			    <div align="center">
				    <tr>
					    <td>Your Summary of Orders</td>
					    <td colspan="3" align="center"><?php echo $_GET['fname'];?></td>
				    </tr>
			    </div>
				    <tr style="background-color: #176B87;">
					    <td>MEALS</td>
					    <td>Quantity</td>
					    <td>PRICE</td>
					    <td>Subtotal</td>
				    </tr>
				    <tr>
					    <td>Pork Sisig</td>
					    <td><?php echo $_GET['meal1'];?></td>
					    <td>₱399.00</td>
					    <td><?php echo "₱" .number_format($pl1,2);?></td>
				    </tr>
				    <tr>
					    <td>Tokwa`t Baboy</td>
					    <td><?php echo $_GET['meal2'];?></td>
					    <td>₱299.00</td>
					    <td><?php echo "₱" .number_format($pl2,2);?></td>
				    </tr>
				    <tr>
					    <td>Kare-kare</td>
					    <td><?php echo $_GET['meal3'];?></td>
					    <td>₱599.00</td>
					    <td><?php echo "₱" .number_format($pl3,2);?></td>
				    </tr>
				    <tr>
					    <td>Pinakbet</td>
					    <td><?php echo $_GET['meal4'];?></td>
					    <td>₱259.00</td>
					    <td><?php echo "₱" .number_format($pl4,2);?></td>
				    </tr>
				    <tr>
					    <td>Lumpiang Shanghai</td>
					    <td><?php echo $_GET['meal5'];?></td>
					    <td>₱299.00</td>
					    <td><?php echo "₱" .number_format($pl5,2);?></td>
				    </tr>
				    <tr>
					    <td>Fried Rice</td>
					    <td><?php echo $_GET['meal6'];?></td>
					    <td>₱159.00</td>
					    <td><?php echo "₱" .number_format($pl6,2);?></td>
				    </tr>
				    <tr style="border: none;">
					    <td colspan="4" align="right">TOTAL PRICE : ₱<?php echo number_format($ttl,2);?></td>
				    </tr>
				    <tr style="border: none;">
					    <td colspan="4" align="right">5% SALES TAX : ₱<?php echo number_format($stx,2);?></td>
				    </tr>
				    <tr style="border: none;">
					    <td colspan="4" align="right">TOTAL AMOUNT : ₱<?php echo number_format($stx + $ttl,2);?></td>
				    </tr>
                    <tr>
                        <td colspan="4" align="right">
                            <a href="ordering.php" class="button">Order Again</a>
                        </td>
                    </tr>
		    </form>
	    </table>
</body>
</html>