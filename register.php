<?php
	echo '<link rel="stylesheet" href="css\style.css">';
    require('cnx.php');
    $login=$_POST['login'];
    $mdp=$_POST['mdp'];
    $res=mysql_query("select * from Client where adresse='$login' ") or die ("erreur ".mysql_error());
	$row = mysql_fetch_array($res);
	if($row['adresse']==$login)
	{
		if ($row['pw']==$mdp) {
		session_start();
		$_SESSION['login']=$login;	
		echo "<div class='box'>";
		echo "<h2>Welcom</h2><h1>  $login</h1>";
		echo "<a href='deconnexion.php'><button>Deconnection</button></a>";
		echo "</div>";
		}
		else
		{
		echo "<div class='box'>";
		echo "<h1>wrong password</h1>";
		echo "<a href='index.php'><button>return to login</button></a>";
		echo "</div>";
		}
	}
	else
	{
		echo "<div class='box'>";
		echo "<h1>wrong login/passowrd this account do not exsiste plese verify your login and password</h1>";
		echo "<a href='index.php'><button>Return To Login</button></a>";
		echo "</div>";
	}
?>