<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="create.css" />
    <link rel="stylesheet" href="style.css" />
    <link href='http://fonts.googleapis.com/css?family=Crafty+Girls|Cabin|Lobster|Monoton|Oswald|Bangers|Vampiro+One|Yellowtail' rel='stylesheet' type='text/css'>
    <title>42 Shop</title>
  </head>
  <body class="create_body">
   	<div class="bar_header">
      <a href="/site"><p class="logo">Boutique.com</p></a>
      <div class="navigation">
   	    <ul>
          <a class="ali" href="connection.php"><li class="menu">Se connecter/Inscription</li></a>
          <li>|</li>
   			  <a class="ali" href="#"><li class="menu">Panier</li></a>
   		 </ul>
   	  </div>
   	</div>
   		<br>
  <div class="bar_com">
        <ul>
            <a class="ali" href="connection.php"><li class="menu2">Homme</li></a>
            <li>|</li>
            <a class="ali" href="inscription.php"><li class="menu2">Femme</li></a>
            <li>|</li>
            <a class="ali" href="#"><li class="menu2">Enfant</li></a>
        </ul>
  </div><br>
  <div class="input_block">
    <form action="create.php" method="POST">
        <p>Login ?</p>
        <input type="text" name="login" id="login" /><br />
        <p>Passwd ?</p> 
        <input type="password" name="passwd" id="passwd"/><br>
        <input type="submit" name="submit" class="submit" value="OK" />
        <?php if ($_POST["submit"] === "OK") $_SESSION = htmlspecialchars($_POST);?>
      </form>
  </div>
  <div class="create_c"><p style="color:white;font-size:24px;text-align:center;margin-top:10%">Living yong and free</p></div>
</body>
</html>