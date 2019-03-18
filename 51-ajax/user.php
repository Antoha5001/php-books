<?php
require_once "connect.php";
$query = "select * from users where  id = ?";
$user = $pdo->prepare($query);
$user->execute([$_GET['id']]);
$usr =$user->fetch();
echo "<h2>".htmlspecialchars($usr['firstname'])." ".htmlspecialchars($usr['lastname'])."</h2>";
echo "<p>".htmlspecialchars($usr['name'])."</p>";
echo "<p>".htmlspecialchars($usr['email'])."</p>";