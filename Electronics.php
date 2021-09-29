<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/download.jpg" />
        <title>Our Bazzar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Tectonics!</h1>
                    
                    <p></p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img\elect\10 (1).jpg" height="50" alt="Gown">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Home Theatre</h3>
                                    <p>Price: Rs. 7000.00</p>
				<?php echo "<input type=text value=2000 name=s style='display:none'>";?>
				<?php echo "<input type=text value=HomeTheatre name=x style='display:none'>";?>
					<?php //<a href="h1.php"> ?>
										 	<input type="submit" value="BUY NOW" class="btn btn-primary" name="submit"/>
											</form>
            
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=74" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img\elect\2.jpg"  alt="Sony DSLR">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Remote</h3>
                                    <p>Price: Rs. 450.00</p>
			<?php echo "<input type=text value=2000 name=s style='display:none'>";?>
			<?php echo "<input type=text value=Remote name=x style='display:none'>";?>
					<?php //<a href="h1.php"> ?>
										 	<input type="submit" value="BUY NOW" class="btn btn-primary" name="submit"/>
											</form>
            
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=75" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img\elect\10 (3).jpg"alt="Sony DSLR">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Home Theatre5.1</h3>
                                    <p>Price: Rs. 8000.00</p>
			<?php echo "<input type=text value=8000 name=s style='display:none'>";?>
			<?php echo "<input type=text value=HomeTheatre5.1 name=x style='display:none'>";?>
					<?php //<a href="h1.php"> ?>
										 	<input type="submit" value="BUY NOW" class="btn btn-primary" name="submit"/>
											</form>
            
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=76" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img\elect\10 (2).jpg" alt="Olympus">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Speaker</h3>
                                    <p>Price: Rs. 2000.00</p>
			<?php echo "<input type=text value=2000 name=s style='display:none'>";?>
			<?php echo "<input type=text value=Speaker name=x style='display:none'>";?>
					<?php //<a href="h1.php"> ?>
										 	<input type="submit" value="BUY NOW" class="btn btn-primary" name="submit"/>
											</form>
            
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=77" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img\elect\10 (4).jpg"  alt="Titan 301">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Switch Boards</h3>
                                    <p>Price: Rs. 1500.00</p>
			<?php echo "<input type=text value=1500 name=s style='display:none'>";?>
			<?php echo "<input type=text value=SwitchBoards name=x style='display:none'>";?>
					<?php //<a href="h1.php"> ?>
										 	<input type="submit" value="BUY NOW" class="btn btn-primary" name="submit"/>
											</form>
            
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=78" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img\elect\10 (5).jpg" alt="Titan 201">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Modem</h3>
                                    <p>Price: Rs. 9000.00</p>
		<?php echo "<input type=text value=9000 name=s style='display:none'>";?>
		<?php echo "<input type=text value=Modem name=x style='display:none'>";?>
					<?php //<a href="h1.php"> ?>
										 	<input type="submit" value="BUY NOW" class="btn btn-primary" name="submit"/>
											</form>
            
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=79" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img\elect\7.jpg" alt="htm milan">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Bluetooth Speaker</h3>
                                    <p>Price: Rs. 8000.00</p>
		<?php echo "<input type=text value=8000 name=s style='display:none'>";?>
		<?php echo "<input type=text value=BluetoothSpeaker name=x style='display:none'>";?>
					<?php //<a href="h1.php"> ?>
										 	<input type="submit" value="BUY NOW" class="btn btn-primary" name="submit"/>
											</form>
            
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=80" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img\elect\10 (6).jpg" alt="Favre Leuba">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Setup Box</h3>
                                    <p>Price: Rs. 2000.00</p>
				<?php echo "<input type=text value=2000 name=s style='display:none'>";?>
				<?php echo "<input type=text value=SetupBox name=x style='display:none'>";?>
					<?php //<a href="h1.php"> ?>
										 	<input type="submit" value="BUY NOW" class="btn btn-primary" name="submit"/>
											</form>
            
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=81" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img\elect\10 (7).jpg" alt="Raymond shirt">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Charger</h3>
                                    <p>Price: Rs. 800.00</p>
		<?php echo "<input type=text value=800 name=s style='display:none'>";?>
		<?php echo "<input type=text value=Charger name=x style='display:none'>";?>
					<?php //<a href="h1.php"> ?>
										 	<input type="submit" value="BUY NOW" class="btn btn-primary" name="submit"/>
											</form>
            
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=82" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img\elect\10 (8).jpg" alt="Charles shirt">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Charger with bluetooth</h3>
                                    <p>Price: Rs. 1400.00</p>
			<?php echo "<input type=text value=1400 name=s style='display:none'>";?>
			<?php echo "<input type=text value=Chargerwithbluetooth name=x style='display:none'>";?>
					<?php //<a href="h1.php"> ?>
										 	<input type="submit" value="BUY NOW" class="btn btn-primary" name="submit"/>
											</form>
            
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=83" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img\elect\10 (9).jpg" alt="HXR">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Headphone & Pendrive</h3>
                                    <p>Price: Rs. 2800.00</p>
			<?php echo "<input type=text value=2800 name=s style='display:none'>";?>
			<?php echo "<input type=text value=Headphone&Pendrive name=x style='display:none'>";?>
					<?php //<a href="h1.php"> ?>
										 	<input type="submit" value="BUY NOW" class="btn btn-primary" name="submit"/>
											</form>
            
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=84" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img\elect\10 (10).jpg" alt="PINK">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>WebCamera</h3>
                                    <p>Price: Rs. 7500.00</p>
			<?php echo "<input type=text value=7500 name=s style='display:none'>";?>
			<?php echo "<input type=text value=WebCamera name=x style='display:none'>";?>
					<?php //<a href="h1.php"> ?>
										 	<input type="submit" value="BUY NOW" class="btn btn-primary" name="submit"/>
											</form>
            
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=85" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                           
                                        ?>
                     
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy</p>
           		<p>S Store. All Rights Reserved.</p>
                   
               </center>
               </div>
           </footer>
        </div>
<style>

      img
{
min-width:100px;
max-width:100px;
min-height:200px;
max-height:200px;
}
	
</style>

    </body>
</html>
