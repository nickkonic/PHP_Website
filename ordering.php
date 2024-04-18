<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ordering.css">
    <link rel="Icon" href="Images/icon.png">
    <title>Karl's Eatery</title>
    <style> 
    input[type=button], input[type=submit], input[type=reset] {
    background-color: #86B6F6;
    border: none;
    color: black;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 25px;
    }
    .orderline1 {
    width: 100%;
    padding: 50px 20px;
    box-sizing: border-box;
    font-size: 28px;
    }
    .orderline2 {
    width: 100%;
    padding: 50px 20px;
    box-sizing: border-box;
    font-size: 28px;
    }
    .orderline3 {
    width: 100%;
    padding: 50px 20px;
    box-sizing: border-box;
    font-size: 28px;
    }
    .orderline4 {
    width: 100%;
    padding: 50px 20px;
    box-sizing: border-box;
    font-size: 28px;
    }
    .orderline5 {
    width: 100%;
    padding: 50px 20px;
    box-sizing: border-box;
    font-size: 28px;
    }
    .orderline6 {
    width: 100%;
    padding: 50px 20px;
    box-sizing: border-box;
    font-size: 28px;
    }
    .branding .fbranding{
    width: auto;
    height: 0;
    margin-left: -100px;
    font-size: 68px;
    font-weight: 400;
    color: #0F0F0F;
    font-family: Jolly Lodger, 'Source Sans Pro';
    white-space: nowrap;
    text-align: center;
  }
    .branding .sbranding {
    width: auto;
    height: 25px;
    margin-left: 85px;
    font-size: 58px;
    font-weight: 400;
    line-height: 1.215;
    color: #86B6F6;
    font-family: Jolly Lodger, 'Source Sans Pro';
    white-space: nowrap;
    text-align: center;
  }

</style>
</head>
<body>
    <div >
        <div class="brand">
            <p class="fbrand">Karl’s</p>
            <p class="sbrand">Eatery</p>
        </div>
            <table border="1" align="center" style="border-collapse: collapse; width: 80%;" cellpadding="5" >
                <form action="receipt.php" method="GET" >
                <tr style="border-top: none; border-left: none; border-right: none;" >
                    <td colspan="3">
                        Your Name: <input type="text" name="fname" placeholder="Full Name" style="width: 92.4%; box-sizing: border-box; padding: 12px 20px;" required>
                    </td>
                </tr>
                <tr>
                    <td align="center">Meals</td>
                    <td align="center">Order</td>
                </tr>
                <tr>
                    <td style="height: auto; width: 50%;"><div class="polaroid">
                        <img src="images/pork_sisig.jpg" alt="5 Terre" style="width: 100%">
                        <div class="container">
                        <p>Pork Sisig</p>
                        </div>
                    </div></td>
                    <td>
                        <input type="text" class="orderline1" name="meal1" required>
                            <div class="branding">
                                <p style="text-align: center;">Please input "0" if you don't want to order, Thanks!</p>
                                <p class="fbranding">Price</p>
                                <p class="sbranding">₱399.00</p>
                            </div>
                    </td>
                </tr>
                <tr>
                    <td><div class="polaroid">
                        <img src="images/tokwat_baboy.jpg" alt="5 Terre" style="width: 100%">
                        <div class="container">
                        <p>Tokwa`t Baboy</p>
                        </div>
                    </div></td>
                    <td>
                        <input type="text" class="orderline2" name="meal2" required>
                            <div class="branding">
                                <p style="text-align: center;">Please input "0" if you don't want to order, Thanks!</p>
                                <p class="fbranding">Price</p>
                                <p class="sbranding">₱299.00</p>
                            </div>
                    </td>
                </tr>
                <tr>
                    <td><div class="polaroid">
                        <img src="images/kare_kare.jpg" alt="5 Terre" style="width: 100%">
                        <div class="container">
                        <p>Kare-kare</p>
                        </div>
                    </div></td>
                    <td>
                        <input type="text" class="orderline3" name="meal3" required>
                            <div class="branding">
                                <p style="text-align: center;">Please input "0" if you don't want to order, Thanks!</p>
                                <p class="fbranding">Price</p>
                                <p class="sbranding">₱599.00</p>
                            </div>
                    </td>
                </tr>
                <tr>
                    <td><div class="polaroid">
                        <img src="images/pinakbet.jpg" alt="5 Terre" style="width: 100%">
                        <div class="container">
                        <p>Pinakbet</p>
                        </div>
                    </div></td>
                    <td>
                        <input type="text" class="orderline4" name="meal4" required>
                            <div class="branding">
                                <p style="text-align: center;">Please input "0" if you don't want to order, Thanks!</p>
                                <p class="fbranding">Price</p>
                                <p class="sbranding">₱259.00</p>
                            </div>
                    </td>
                </tr>
                <tr>
                    <td><div class="polaroid">
                        <img src="images/lumpang_shanghai.jpg" alt="5 Terre" style="width: 100%">
                        <div class="container">
                        <p>Lumpiang Shanghai</p>
                        </div>
                    </div></td>
                    <td>
                        <input type="text" class="orderline5" name="meal5" required>
                            <div class="branding">
                                <p style="text-align: center;">Please input "0" if you don't want to order, Thanks!</p>
                                <p class="fbranding">Price</p>
                                <p class="sbranding">₱299.00</p>
                            </div>
                    </td>
                </tr>
                <tr>
                    <td><div class="polaroid">
                        <img src="images/fried_rice.jpg" alt="5 Terre" style="width: 100%">
                        <div class="container">
                        <p>Fried Rice</p>
                        </div>
                    </div></td>
                    <td>
                        <input type="text" class="orderline6" name="meal6" required>
                            <div class="branding">
                                <p style="text-align: center;">Please input "0" if you don't want to order, Thanks!</p>
                                <p class="fbranding">Price</p>
                                <p class="sbranding">₱159.00</p>
                            </div>
                    </td>
                </tr>
                <tr style="border: none;">
                    <td colspan="1"></td>
                    <td align="center">
                        <input type="submit" value="Order Now">
                        <input type="reset" value="Clear">
                    </td>
                </tr>
            </form>
        </table>
    </div>
</body>
</html>