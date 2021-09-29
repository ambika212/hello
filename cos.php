<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/download.jpg" />
        
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
                    <h1>Our Beauty In Line Of Duty!</h1>
                    
                    <p></p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img\cos n home\2.jpg" height="50" alt="Gown">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Jashmine Perfume</h3>
                                    <p>Price: Rs. 800.00</p>
				<?php echo "<input type=text value=800 name=s style='display:none'>";?>
				<?php echo "<input type=text value=Jashmineperfume name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=62" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\cos n home\3.jpg"  alt="Sony DSLR">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Homemade Creams</h3>
                                    <p>Price: Rs. 4000.00</p>
				<?php echo "<input type=text value=4000 name=s style='display:none'>";?>
				<?php echo "<input type=text value=HomemadeCreams name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=63" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\cos n home\4.jpg"alt="Sony DSLR">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Homemade perfume</h3>
                                    <p>Price: Rs. 1200.00</p>
			<?php echo "<input type=text value=1200 name=s style='display:none'>";?>
			<?php echo "<input type=text value=Homemadeperfume name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=64" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\cos n home\5.jpg" alt="Olympus">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Rose favCreams</h3>
                                    <p>Price: Rs. 800.00</p>
			<?php echo "<input type=text value=800 name=s style='display:none'>";?>
			<?php echo "<input type=text value=RosefavCreams name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=65" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\copy\10(4).jpg"  alt="Titan 301">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Skin Care Powder</h3>
                                    <p>Price: Rs. 1200.00</p>
				<?php echo "<input type=text value=1200 name=s style='display:none'>";?>
				<?php echo "<input type=text value=SkinCarepowder name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=66" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\cos n home\7.jpg" alt="Titan 201">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Body lotion</h3>
                                    <p>Price: Rs. 1000.00</p>
				<?php echo "<input type=text value=1000 name=s style='display:none'>";?>
				<?php echo "<input type=text value=Bodylotion name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=67" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\cos n home\13.jpg"alt="htm milan">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Coconut Hairoil</h3>
                                    <p>Price: Rs. 450.00</p>
 		<?php echo "<input type=text value=450 name=s style='display:none'>";?>
		<?php echo "<input type=text value=CoconutHairoil name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=68" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\cos n home\8.jpg" alt="Favre Leuba">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Conditioner</h3>
                                    <p>Price: Rs. 700.00</p>
				<?php echo "<input type=text value=700 name=s style='display:none'>";?>
				<?php echo "<input type=text value=Conditioner name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=69" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\copy\10(5).jpg" alt="Raymond shirt">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Skin Alive</h3>
                                    <p>Price: Rs. 600.00</p>
				<?php echo "<input type=text value=600 name=s style='display:none'>";?>
				<?php echo "<input type=text value=Skin Alive name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=70" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\cos n home\12.jpg" alt="Charles shirt">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Perfumes & Creames</h3>
                                    <p>Price: Rs. 1000.00</p>
					<?php echo "<input type=text value=1000 name=s style='display:none'>";?>
					<?php echo "<input type=text value=Perfume&Creames name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=71" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\cos n home\11.jpg" alt="HXR">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Lipsticks</h3>
                                    <p>Price: Rs. 750.00</p>
				<?php echo "<input type=text value=750 name=s style='display:none'>";?>
				<?php echo "<input type=text value=Lipsticks name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=72" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img\copy\10(7).jpg" alt="PINK">
                            </a>
                            <center>
							<form method=post action=h1.php>
                                <div class="caption">
                                    <h3>Lip Gloss</h3>
                                    <p>Price: Rs. 800.00</p>
				<?php echo "<input type=text value=800 name=s style='display:none'>";?>
				<?php echo "<input type=text value=LipGloss name=x style='display:none'>";?>
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
                                                <a href="cart_add.php?id=73" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
