<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'it63070024-itf-lab13-database-php.mysql.database.azure.com', 'it630070024@it63070024-itf-lab13-database-php', 'TMRpti62', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_member WHERE id=$id";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$num = $result->num_rows;
//echo $num;
//print_r($row);
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container">
	<div class="row">
		<div  class="col-sm-5">
			<br>
			<h3>Edit Comment</h3>
			<form action="insert_edit.php" method="post">
				<div class="form-group">
				Name : <input type="text" name="name" required value="<?php echo $row['name'];?>" class="form-control" placeholder="name"> 
				</div>
				<div class="form-group">
				Comment : <input type="texl" name="comment" required value="<?php echo $row['comment'];?>" class="form-control" placeholder="comment">
			</div>
				<div class="form-group">
				Link : <input type="text" name="link" required value="<?php echo $row['link'];?>" class="form-control" placeholder="link">
				</div>
				<div class="form-group">
				<button type="submit" class="btn btn-success">Save</button>
			</div>
			</form>
		</div>
	</div>
</div>
<?php }else{  echo 'Error!';  } ?>