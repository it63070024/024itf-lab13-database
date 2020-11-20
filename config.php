<?php
 
$conn = mysqli_real_connect($conn, 'it63070024-itf-lab13-database-php.mysql.database.azure.com', 'it630070024@it63070024-itf-lab13-database-php', 'TMRpti62', 'itflab', 3306);
 
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>