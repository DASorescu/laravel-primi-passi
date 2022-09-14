<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
<h1>Welcome on my site</h1>
    <ul>
        @foreach($pages as $page)
        <li><a href="{{url($page)}}">{{$page}}</a></li>
        @endforeach
    </ul>
</body>
</html>
<style>
    body{
        text-align: center;
        width: 100%;
    }
    h1{
        width: 100%;
    }
    ul{
        list-style-type: none;
        height: 100px;
        width: 100%;
        display:flex;
        align-items: center;
        justify-content: center;
        padding: 1rem 2rem;
        width: 100%
    }
    li{
        background-color: aqua;
        padding: 1rem 2rem;
        margin: 1rem;

    }
    li a{
        color: black;
        font-size: 1rem;
    }
</style>