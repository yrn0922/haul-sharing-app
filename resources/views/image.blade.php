<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body> 
    <h1 class="title">
            {{ $title }}
    </h1>
     <h3 class="body">
            {{ $body }}
    </h3>
       <img src="{{ asset($image->path) }}">
       
    </body>
</html>
       