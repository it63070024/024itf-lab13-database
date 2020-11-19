<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'it63070024-itf-lab13-database-php.mysql.database.azure.com', 'it630070024@it63070024-itf-lab13-database-php', 'TMRpti62', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
if(isset($_POST['id'])){
$id = $_POST['id'];	
		$sql =	"UPDATE  guestbook (Name , Comment , Link) VALUES ('$name', '$comment', '$link') WHERE id=$id");
		$stmt->bind_param("sss", $name, $comment, $link);
 
		$name = $_POST['name'];
		$comment = $_POST['comment'];
		$link = $_POST['link'];
		$stmt->execute();
		if (mysqli_query($conn, $sql)) {
			echo "Comment Updated <button class="btn-primary"><a href='index.php'> Main Page </a></button>";
		  } else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		  }
		close($stmt);
		mysqli_close($conn);
 }
 
?>