<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'it63070024-itf-lab13-database-php.mysql.database.azure.com', 'it630070024@it63070024-itf-lab13-database-php', 'TMRpti62', 'itflab', 3306);
if (mysqli_connect_errno($conn)){
	die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT* FROM guestbook WHERE id=$id");
$row = mysqli_fetch_array($result);
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container">
	<div class="row">
		<div  class="col-sm-5">
			<br>
			<h3>Edit Comment</h3>
			<input type="hidden" name="id" value="<?php echo $row['id'];?>">
			<form action="insert_edit.php" method="post">

				<div class="form-group">
				Name : <input type="text" name="name" required value="<?php echo $row['Name'];?>" class="form-control" > 
				</div>
				<div class="form-group">
				Comment : <input type="texl" name="comment" required value="<?php echo $row['Comment'];?>" class="form-control" >
			</div>
				<div class="form-group">
				Link : <input type="text" name="link" required value="<?php echo $row['Link'];?>" class="form-control" >
				</div>
				<div class="form-group">
				<button type="submit" name="id" class="btn btn-success" <?php echo $row['ID];?>>Save</button>
			</div>
			</form>
		</div>
	</div>
</div>
