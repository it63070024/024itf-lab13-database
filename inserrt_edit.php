<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'it63070024-itf-lab13-database-php.mysql.database.azure.com', 'it630070024@it63070024-itf-lab13-database-php', 'TMRpti62', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

if(isset($_POST['id'])){
$id = $_POST['id'];	
		// prepare and bind
		$stmt = $conn->prepare("
			UPDATE  tbl_member  SET 
		name=?,
		email=?,
		phone=?
		WHERE id=$id
		");
		$stmt->bind_param("sss", $name, $email, $phone);
 
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$stmt->execute();
		if($stmt->error){
			echo $stmt->error;
		}else{
			echo "Update Successfull <a href='index.php'> Home </a> ";
		}
		$stmt->close();
		mysqli_close($conn);
 }
 
?>