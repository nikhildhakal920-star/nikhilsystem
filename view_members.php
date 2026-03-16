<?php
include "db.php";

$result=mysqli_query($conn,"SELECT * FROM members");
?>

<h2>Members List</h2>

<table border="1">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Plan</th>
<th>Photo</th>
<th>Action</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result)){
?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['plan']; ?></td>

<td>
<img src="uploads/<?php echo $row['photo']; ?>" width="50">
</td>

<td>

<a href="edit_member.php?id=<?php echo $row['id']; ?>">Edit</a>

<a href="delete_member.php?id=<?php echo $row['id']; ?>">Delete</a>

</td>

</tr>

<?php
}
?>

</table>