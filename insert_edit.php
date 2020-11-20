<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'it63070024-itf-lab13-database-php.mysql.database.azure.com', 'it630070024@it63070024-itf-lab13-database-php', 'TMRpti62', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$result = mysqli_query($conn, "SELECT * FROM guestbook WHERE id=$id");

	if (count($result) == 1){
		$row = mysqli_fetch_array($result);
		$name = $row['name']
		$comment = $row['comment']
		$link = $row['link']
	}

}

$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];
$id = $_POST['id'];	

$sql =	"UPDATE  guestbook SET Name= '$name', Comment= '$comment', Link= '$link'  WHERE id=$id");
		
 


if (mysqli_query($conn, $sql)) {
		header('Location: ./');
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);
 }
?>