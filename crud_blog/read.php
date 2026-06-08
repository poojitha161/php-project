<?php
include 'db.php';

$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Posts</title>
    <th>Action</th>
</head>
<body>

<h2>All Posts</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Content</th>
    <th>Action</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['content']; ?></td>
    <td> 
    <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
    <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php
}
?>

</table>

</body>
</html>