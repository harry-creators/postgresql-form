<!DOCTYPE html>
<head>
<title>Insert data to PostgreSQL with php - creating a simple web application</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
li {listt-style: none;}
</style>
</head>
<body>
<h2>Enter information regarding book</h2>
<ul>
<form name="insert" action="insert.php" method="POST" >
<li>Book ID:</li><li><input type="text" name="bookid" /></li>
<li>Book Name:</li><li><input type="text" name="book_name" /></li>
<li>Author:</li><li><input type="text" name="author" /></li>
<li>Publisher:</li><li><input type="text" name="publisher" /></li>
<li>Date of publication:</li><li><input type="text" name="dop" /></li>
<li>Price (USD):</li><li><input type="text" name="price" /></li>
<li><button type="button"  name="submit"> SUBMIT </button></li>
</form>
</ul>
</body>
</html>
<?php
$db = pg_connect("host=ec2-23-20-168-40.compute-1.amazonaws.com port=5432 dbname=daefnrh6o0a4r2 user=fbcyaxkaibfbes password=14da2692ba3eab355550fe8d05b407b05fa9cfcadd6211e4579a3264d5bcf77a ");

if(isset($_POST['submit']))
{
	$query = "INSERT INTO book VALUES ('$_POST[bookid]','$_POST[book_name]',
	'$_POST[author]','$_POST[publisher]','$_POST[dop]',
	'$_POST[price]')";
	$result = pg_query($query); 
}
?>
