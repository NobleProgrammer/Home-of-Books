<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <title>Book Database</title>

<link rel="stylesheet" href="../common/global_style.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

</head>

<body>

<div class = "wrapper">

<div id = "header">
<?php
include  '..//common//header.php';
/*include './includes/taken.php';*/
?>
</div>

<div class="wrapper_body">
<p> We have a database of books for this website, it's to gather books that we mentioned in our website.
    It's directly linked to our database :)
   </p>
<table>
<tr>
<th>Book</th>
<th>Author</th>
<th>Publisher</th>
<th>Year</th>
</tr>

<?php
include_once '../common/dbh.php';
?>

<?php
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name, authorID, publisher, year, aname FROM book, author where author.id=authorid;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

echo "<tr><td>" . $row["name"]. "</td><td>" . $row["aname"] . "</td><td>"
. $row["publisher"]. "</td><td>" .$row["year"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

</div>
</div>
<div class="footer">
  <?php
  include '../common/footer.php'
  ?>
</div>
</body>
<!--
<footer class="footer">
  <?php
  include '../common/footer.php'
  ?>
</footer> -->
</html>
