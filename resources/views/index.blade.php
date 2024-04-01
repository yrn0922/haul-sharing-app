<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
       
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Haul!</h1>
                 <p class='body'>購入品紹介サイトTOP</p>
                 
                 <div class="postlist">
                 <a href='/list'>投稿一覧</a>
                 <a href='/upload'>新規投稿する</a>
                 </div>
        <style>
        body { background-color:#fffdd0; /*クリーム色 */line-height: 1.00; /* 行間を1.5倍に設定 */
         h1 {color: #000080; /* 青色 */}
         p {color: #333333; /* 灰色 */ }
         h1,p{text-align: center;}
         /*a{display: inline-block; /* インラインブロック要素として表示 */
           /* text-align: center; /* 文字を中央に配置 */ }
        .postlist{text-align: center;}
        </style>
    </body>
</html>
       