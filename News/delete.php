<html>
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
include_once "db.php";
/** @var mysqli $connect */

$id = $_GET['id'];

mysqli_query($connect,"DELETE FROM news WHERE id = '$id'");
mysqli_query($connect,"SET NAMES 'utf8' ");
mysqli_close($connect);

echo "Новость успешно удалена!";
?>
<br /><br />
<a href="home.php">Вернуться на главную</a>
</body>
</html>


