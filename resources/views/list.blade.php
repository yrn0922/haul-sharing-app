<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body> 
    <style>
        body { background-color:#fffdd0; /*クリーム色 */line-height: 1.00; /* 行間を1.5倍に設定 */
         h1 {color: #000080; /* 青色 */}
         p {color: #333333; /* 灰色 */ }
         h1{text-align: center;}
         a {display: inline-block; /* インラインブロック要素として表示 */
            text-align: center; /* 文字を中央に配置 */
            }
        </style>
    </h1>
        <h1>投稿一覧</h1>
          <a href="/">戻る</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='id'>{{ $post->id }}</h2>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>
       