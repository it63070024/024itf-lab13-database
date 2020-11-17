<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'it63070024-itf-lab13-database-php.mysql.database.azure.com', 'it630070024@it63070024-itf-lab13-database-php', 'TMRpti62', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$sql = "DELETE FROM guestbook WHERE 'id'='".$data."'");

if (mysqli_query($conn, $sql)) {
    echo "Delete successfull";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

?>