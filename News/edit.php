<html>
<head>
    <meta charset="UTF-8">
    <title>Редактирование новости</title>
</head>
<body>

<?php

include_once "db.php";
/** @var mysqli $connect */
$id = $_GET['id'];
$result = mysqli_query($connect, "SELECT title,content, date, time, author FROM news
                                      WHERE id = '$id'");

$row = mysqli_fetch_assoc($result);

if (isset($_POST['save']))
{
    $title = strip_tags(trim($_POST['title']));
    $content = strip_tags(trim($_POST['content']));
    $author = strip_tags(trim($_POST['author']));
    $date = $_POST['date'];
    $time = $_POST['time'];

    mysqli_query($connect, "UPDATE news SET title = '$title',
                                            content ='$content',
                                            author ='$author',
                                            date = '$date',
                                            time ='$time'
                                        WHERE id='$id'");

    $result = mysqli_query($connect, "SELECT title,content, date, time, author FROM news
                                      WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);
    mysqli_close($connect);
    echo "<p><strong>Изменения внесены!!</strong></p>";
}
?>

<form method="post" action="edit.php?id=<?php echo $id ?>">
    Название нвости:<br/>
    <input type="text" name="title" value="<?php echo $row['title'] ?>"/><br/>
    Текст новости:<br/>
    <textarea name="content" id="" cols="40" rows="10"><?php echo $row['content']; ?></textarea><br/>
    Автор новости:<br/>
    <input type="text" name="author" value="<?php echo $row['author'] ?>"/><br/><br/>

    <input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>"/>
    <input type="hidden" name="time" value="<?php echo date('H:i:s'); ?>"/>

    <input type="submit" name="save" value="Сохранить"/><br/><br/>
    <a href="home.php">Вернуться на главную</a>
</form>

</body>
</html>