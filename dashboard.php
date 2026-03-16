<?php
session_start();

if(!isset($_SESSION['admin'])){
header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>JYM Dashboard</title>
</head>

<body>

<h1>Welcome to JYM Dashboard</h1>

<a href="add_member.php">Add Member</a>

<a href="view_members.php">View Members</a>

<a href="logout.php">Logout</a>

</body>
</html>