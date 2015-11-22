<html>
<head>
    <meta charset="UTF-8">
    <title>Логин форма</title>
</head>
<body>
    
    <form method = "post" action="login.php">
        Login <input type="text" name="login"/><br /><br />
        Password <input type="password" name="pass"/><br /><br />
        <input  type="submit" value="Submit"/>
    </form>
    <?php
    if (isset($_POST['submit']))
    {
        if (isset($_POST['login']) || isset($_POST['password']))
        $login = strip_tags(trim($_POST['login']));
        
    }
    
    ?>
    
</body>
</html>