<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َLogin</title>
    <link rel="stylesheet" href="css\style.css">
  </head>
  <body>
 <div class="box" >
<form action="register.php" method="post">
  <h2>Login</h2>
  <input type="text" name="adr" placeholder="Email" required/>
  <input type="text" name="np" placeholder="Nom & Prenom" required/>
  <select name="pays">
    <?php
    require('cnx.php');
       $res=mysql_query("select * from pays") or die ("erreur ".mysql_error());
       while ($ligne=mysql_fetch_array($res))
         {
          echo "<option value='";
          echo $ligne[0];
          echo "'>";
          echo $ligne[0];
          echo "</option>";
        }
    ?>
  </select>
  <input type="password" name="mdp" placeholder="Mote de passe" required/>
  <div>
  <input type="submit" value="Register">
</div>
</form>
  </body>
</html>