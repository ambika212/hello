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
                    <h1>Furnishing Items Here!!</h1>
                    
                    <p></p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img\copy\1.jpg" alt="Gown">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Tavolo</h3>
                                    <p>Price: Rs. 20000.00</p>
	            	<?php echo "<input type=text value=20000 name=s style='display:none'>";?>
					<?php echo "<input type=text value=Tavolo name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=50" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\copy\2.jpg"  alt="Sony DSLR">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Mario</h3>
                                    <p>Price: Rs. 14000.00</p>
				<?php echo "<input type=text value=14000 name=s style='display:none'>";?>
				<?php echo "<input type=text value=Mario name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=51" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\copy\3.jpg"alt="Sony DSLR">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>SideBoards</h3>
                                    <p>Price: Rs. 15000.00</p>
				<?php echo "<input type=text value=15000 name=s style='display:none'>";?>
				<?php echo "<input type=text value=SideBoards name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=52" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\copy\4.jpg" alt="Olympus">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Arm Chair</h3>
                                    <p>Price: Rs. 8000.00</p>
				<?php echo "<input type=text value=8000 name=s style='display:none'>";?>
				<?php echo "<input type=text value=ArmChair name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=53" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\copy\5.jpg"  alt="Titan 301">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Craft wooden</h3>
                                    <p>Price: Rs. 13000.00</p>
				<?php echo "<input type=text value=13000 name=s style='display:none'>";?>
				<?php echo "<input type=text value=Craftwooden name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=54" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\copy\6.jpg" alt="Titan 201">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Brownstone Chair</h3>
                                    <p>Price: Rs. 3000.00</p>
				<?php echo "<input type=text value=3000 name=s style='display:none'>";?>
				<?php echo "<input type=text value=BrownstoneChair name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=55" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\copy\7.jpg"alt="htm milan">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Wave</h3>
                                    <p>Price: Rs. 18000.00</p>
				<?php echo "<input type=text value=18000 name=s style='display:none'>";?>
				<?php echo "<input type=text value=Wave name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=56" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\copy\8.jpg" alt="Favre Leuba">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Movable parts wooden</h3>
                                    <p>Price: Rs. 18000.00</p>
			<?php echo "<input type=text value=18000 name=s style='display:none'>";?>
			<?php echo "<input type=text value=Movablepartswooden name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=57" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\copy\9.jpg" alt="Raymond shirt">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>New Port</h3>
                                    <p>Price: Rs. 15000.00</p>
				<?php echo "<input type=text value=15000 name=s style='display:none'>";?>
				<?php echo "<input type=text value=NewPort name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=58" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\copy\10(1).jpg" alt="Charles shirt">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Teak Wood</h3>
                                    <p>Price: Rs. 1800.00</p>
				<?php echo "<input type=text value=1800 name=s style='display:none'>";?>
				<?php echo "<input type=text value=TeakWood name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=59" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\copy\10(2).jpg" alt="HXR">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Foldable</h3>
                                    <p>Price: Rs. 9000.00</p>
				<?php echo "<input type=text value=9000 name=s style='display:none'>";?>
				<?php echo "<input type=text value=Foldable name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=60" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\copy\10(3).jpg" alt="PINK">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>PINK</h3>
                                    <p>Price: Rs. 16000.00</p>
				<?php echo "<input type=text value=16000 name=s style='display:none'>";?>
				<?php echo "<input type=text value=PINK name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=61" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                   <p>Copyright &copy <a href="https://projectworlds.in"></a> Store. All Rights Reserved.</p>
                   <p>This website is developed by Ambi</p>
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
