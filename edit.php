<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'it63070024-itf-lab13-database-php.mysql.database.azure.com', 'it630070024@it63070024-itf-lab13-database-php', 'TMRpti62', 'itflab', 3306);
if (mysqli_connect_errno($conn)){
	die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM guestbook WHERE ID=$id");
$row = mysqli_fetch_array($result);
?>

<title>Update</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container">
	<div class="row">
		<div  class="col-sm-5">
			<br>
			<h3>Edit Comment</h3>
		

			<form action="" method="post">
				<div class="form-group">
					<input type="hidden" name="id" value="<?php echo $row['ID'];?>" class="form-control" > 
				</div>
				<div class="form-group">
					Name : <input type="text" name="name" required value="<?php echo $row['Name'];?>" class="form-control" > 
				</div>
				<div class="form-group">
					Comment : <input type="text" name="comment" required value="<?php echo $row['Comment'];?>" class="form-control" >
				</div>
				<div class="form-group">
					Link : <input type="text" name="link" required value="<?php echo $row['Link'];?>" class="form-control" >
				</div>
				<div class="form-group">
					<button name="save" value="<?php echo $row['ID'];?>" class="btn btn-success" type="submit" >Save</button>
				</div>
			</form>
		</div>

	</div>
</div>
<?php
if(isset($_POST['save'])){
	$name = $_POST['name'];
	$comment = $_POST['comment'];
	$link = $_POST['link'];

	$sql = "UPDATE guestbook SET Name=$name, Comment=$comment, Link=$link WHERE ID=$id" ;


	if (mysqli_query($conn, $sql)) {
		header("Location:index.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
		mysqli_close($conn);
}

?>