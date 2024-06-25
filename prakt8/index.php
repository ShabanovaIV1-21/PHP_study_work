<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <form action="prakt8_Shabanova_IV1-21.php" method="POST" enctype="multipart/form-data">
        <div><label> Логин<input type="text" name="login" required><label></div>
        <div><label> Пароль<input type="password" name="password" required><label></div>
        <div><label> e-mail<input type="email" name="email" required><label></div>
        <div><label> Телефон<input type="text" name="phone" required><label></div>
        <div><label> Отправить файл<input name="userfile" type="file" required></div></label>
        <input type="submit" value="Отправить" name="send">
    </form>
    
</body>
</html>