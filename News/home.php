<html>
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
<a href="add.php">Добавить новость</a>
<?php

include_once('db.php');

/** mysqli $connect */
$result = mysqli_query($connect, "SELECT * FROM news ORDER BY id DESC ");

mysqli_close($connect);


while ($row = mysqli_fetch_assoc($result))
{
    ?>
    <h1><?php echo $row['title'] ?></h1>

    <p><?php echo $row['content'] ?></p>

    <p>Дата публикации: <?php echo $row['date'] ?> / <?php echo $row['time'] ?></p>

    <p>Автор новости: <?php echo $row['author'] ?></p>
    <br/>
    <a href="edit.php?id=<?php echo $row['id'] ?>">Редактировать новость</a>
    <hr/>
    <?php
}
?>
</body>
</html>

