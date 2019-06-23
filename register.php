<?php
	echo '<link rel="stylesheet" href="css\style.css">';
    require('cnx.php');
    $adr=$_POST['adr'];
    $mdp=$_POST['mdp'];
    $np=$_POST['np'];
    $res=mysql_query("select * from Client where adresse='$adr' ") or die ("erreur ".mysql_error());
	$row = mysql_fetch_array($res);
	if($row['adresse']==$adr)
	{
		if ($row['pw']==$mdp) {
		session_start();
		$_SESSION['np']=$np;	
		echo "<div class='box'>";
		echo "<h1>Ce compt est deja Cree Mr/Meme $np</h1>";
		echo "<a href='deconnexion.php'><button>Deconnection</button></a>";
		echo "</div>";
		}
		else
		{
		echo "<div class='box'>";
		echo "<h1>Cree votre compte avec un autre email</h1>";
		echo "<a href='index.php'><button>Retourner a la page de creation</button></a>";
		echo "</div>";
		}
	}
	else
	{
		session_start();	
		$_SESSION['np']=$np;	
		$pays=$_POST['pays'];
		$req="insert into Client values ('$adr','$np','$pays','$mdp');";
		mysql_query($req) or die('oops '.mysql_error());
		echo "<div class='box'>";
		echo "<h2>Client insert with succsess</h2>";
		echo "<a href='deconnexion.php'><button>Return To Login</button></a>";
		echo "</div>";
	}
?>