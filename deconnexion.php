<?php
session_start();
echo "<div class='box'>";
echo '<link rel="stylesheet" href="css\style.css">';
$x=$_SESSION['login'];
echo " <h3>thank you for your visite <h3>";
echo"<h3> goodbye $x </h3>";
session_destroy();
echo "</div>";
?>