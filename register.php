<?php

require_once "registration.class.php";
require_once "db.class.php";

$db = new Database('localhost', 'root', '', 'cms');

$form = new Registration($_POST);

if ($_POST) {
    if($form->validate()) {
    $name = $db->escape($form->getName());
    $email = $db->escape($form->getEmail());
    $password = $db->escape($form->getPassword());
    $confirm = $db->escape($form->getConfirm());

        /*$db->query("INSERT INTO `user`(`name`, `email`, `password`, `confirm password`) VALUES ('{$form->name}','{$form->email}','{$form->password}','{$form->confirmPassword}')");*///Доступ приватный так бы работала наверное

        $db->query("INSERT INTO `user`(`name`, `email`, `password`, `confirm password`) VALUES ('{$name}','{$email}','{$password}','{$confirm}')");

        echo "Регистрация успешна";

    } else {
        echo $form->passwordMatch() ? 'Не все поля заполнены' :'Пароли не совпадают';
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<form action="" method="POST">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="password" name="confirmPassword" placeholder="confirm password">
    <input type="submit">
</form>

</body>
</html>