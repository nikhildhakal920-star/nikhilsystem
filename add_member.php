<?php
include "db.php";

if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$plan=$_POST['plan'];

$photo=$_FILES['photo']['name'];
$tmp=$_FILES['photo']['tmp_name'];

move_uploaded_file($tmp,"uploads/".$photo);

$query="INSERT INTO members(name,email,phone,plan,photo)
VALUES('$name','$email','$phone','$plan','$photo')";

mysqli_query($conn,$query);

echo "Member Added";

}
?>

<h2>Add Member</h2>

<form method="POST" enctype="multipart/form-data">

<input type="text" name="name" placeholder="Name" required>

<input type="email" name="email" placeholder="Email" required>

<input type="text" name="phone" placeholder="Phone" required>

<select name="plan">
<option>Basic</option>
<option>Premium</option>
</select>

<input type="file" name="photo">

<button type="submit" name="submit">Add Member</button>

</form>