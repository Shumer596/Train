<html>
<head>
    <meta charset="UTF-8">
    <title>Добавление новсти</title>
</head>
<body>

<form method="post" action="add.php">
    Название нвости:<br/>
    <input type="text" name="title"/><br/>
    Текст новости:<br/>
    <textarea name="content" id="" cols="40" rows="10"></textarea><br/>
    Автор новости:<br/>
    <input type="text" name="author"/><br/><br/>

    <input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>"/>
    <input type="hidden" name="time" value="<?php echo date('H:i:s'); ?>"/>

    <input type="submit" name="add" value="Добавить"/><br/>

</form>
<?php

include_once "db.php";
/** @var mysqli $connect */

if (isset($_POST['add']))
{
    $title = strip_tags(trim($_POST['title']));
    $content = strip_tags(trim($_POST['content']));
    $author = strip_tags(trim($_POST['author']));
    $date = $_POST['date'];
    $time = $_POST['time'];

    mysqli_query($connect, "INSERT INTO news (title, content, date1, time, author)
                            VALUES ('$title','$content','$date','$time','$author')
    ");
    mysqli_close($connect);
    echo "Новость успешно добавлена";
}


?>
</body>
</html>