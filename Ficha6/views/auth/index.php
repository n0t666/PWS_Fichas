<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php?c=auth&a=login" method="post">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="pwd">Password:</label><br>
        <input type="password" name="pwd" id="pwd"><br>
        <button type="submit" style="margin-top: 10px;"> Login</button>
    </form>

</body>

</html>