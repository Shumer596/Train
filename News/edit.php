<html>
<head>
    <meta charset="UTF-8">
    <title>Сохранение новости</title>
</head>
<body>

<?php

include_once "db.php";
/** @var mysqli $connect */
$result = mysqli_query($connect, "SELECT title,content, date, time, author FROM news
                                      WHERE id = '12'");
mysqli_close($connect);
$row = mysqli_fetch_assoc($result);

?>

<form method="post" action="edit.php">
    Название нвости:<br/>
    <input type="text" name="title" value="<?php echo $row['title'] ?>"/><br/>
    Текст новости:<br/>
    <textarea name="content" id="" cols="40" rows="10"><?php echo $row['content']; ?></textarea><br/>
    Автор новости:<br/>
    <input type="text" name="author" value="<?php echo $row['author'] ?>"/><br/><br/>

    <input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>"/>
    <input type="hidden" name="time" value="<?php echo date('H:i:s'); ?>"/>

    <input type="submit" name="save" value="Сохранить"/><br/>

</form>

</body>
</html>