<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Мой блог</title>
    <link rel="stylesheet" href="./styles/main.css">
</head>
<body>

<table class="layout">


<?php
    echo '// '.mime_content_type("https://polytech.bouhartsev.top/server/course2/lab2/styles/main.css").' | '.file_get_contents("https://polytech.bouhartsev.top/server/course2/lab2/styles/main.css");
?>

<br>
<br>
<br>
<br>
<br>
<br>

    <tr>
        <td colspan="2" class="header">
            Мой блог
        </td>
    </tr>
    <tr>
        <td>
            <h2>Статья 1</h2>
            <p>Всем привет, это текст первой статьи</p>
            <hr>
 
            <h2>Статья 2</h2>
            <p>Всем привет, это текст второй статьи</p>
        </td>
 
        <td width="300px" class="sidebar">
            <div class="sidebarHeader">Меню</div>
            <ul>
                <li><a href="/">Главная страница</a></li>
                <li><a href="/about-me">Обо мне</a></li>
            </ul>
        </td>
    </tr>
    <tr>
        <td class="footer" colspan="2">Все права защищены (c) Мой блог</td>
    </tr>
</table>
 
</body>
</html>