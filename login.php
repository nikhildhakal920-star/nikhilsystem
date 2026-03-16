<?php
session_start();
include "db.php";

if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)==1){
$_SESSION['admin']=$username;
header("Location: dashboard.php");
}else{
$error="Invalid username or password";
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>JYM Login</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<h2>JYM Admin Login</h2>

<form method="POST">

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="login">Login</button>

</form>

<?php
if(isset($error)){
echo $error;
}
?>

</body>
</html>