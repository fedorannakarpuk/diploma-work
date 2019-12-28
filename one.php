<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <style>
    
        body{
            width: 80%;
            margin: 0 auto;
            font-size: 30px;
        }
/*
        td{
            width: 50px;
            height: 50px;
        }
*/
        
        
/*
        .circle{
            position: absolute;
            top: 200px;
            left: 200px;
            border: 1px solid red;
            border-radius: 50%;
        }
        
*/
    </style>
    

    
    
    
    
    
    
    
    
    
    
    
    
    

<?php

   include'db.php' ;
    
    
    
//    SELECT * FROM 'USERS'   возьми все из такой таблице
    
 // 2 Этап -- составление запроса   (получение всех пользователей)
    
    //  'SELECT * FROM users WHERE id = 1'; Это если нужно вытащить конкретного пользователя
    
    
    $sql  = 'SELECT * FROM users';
    
    //3 этап - -отправить запрос и выполнить  первый оргумент- наше соединение, второй наш запрос
    
    $result =  mysqli_query($connection,$sql);  //вытаскивает всех users что есть.
    
    // Сделать проверку, если мы ошиблисьв запросе
    if(!$result){
        echo 'запрос не выполнен, ошибка';
    }
    
    
    // 4 этап - орбаботать и вывести
    
    foreach ($result as $user){
        echo $user['login'];
    }
    
    
    
    
    
    
    
    

?>



</head>
<body>





