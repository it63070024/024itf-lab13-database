<html>
<head>
  <title>ITF Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-dark" style="margin:20px;">
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'it63070024-itf-lab13-database-php.mysql.database.azure.com', 'it630070024@it63070024-itf-lab13-database-php', 'TMRpti62', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="table-responsive">
<table class="table table-dark table-striped">
  <thead>
    <th> <center>Name</center></th>
    <th> <center>Comment </center></th>
    <th> <center>Link </center></th>
    <th> <center>Action</center></th>
  </thead>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><div align="center"><?php echo $Result['Name'];?></div></td>
    <td><div align="center"><?php echo $Result['Comment'];?></div></td>
    <td><div align="center"><?php echo $Result['Link'];?></div></td>
    <td><div align="center"><a href="edit.php?id=<?= $row->$id; ?>" class="btn btn-warning">Edit</a>
    <a href="delete.php?id=<?= $row->$id ;?>" class="btn btn-danger">Del</a></td>
    
  </tr>
<?php
}
?>
</table>
</div>
<div class="btn btn-primary" align="center"><a href="form.html" class="btn btn-primary">Comment</a>
<form action="" method="POST">
</form>
</div>
<?php
mysqli_close($conn);
?>
</body>
</html>