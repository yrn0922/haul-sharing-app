<form method="POST" action="/upload" enctype="multipart/form-data">
  @csrf
   <div class="title">
      <style>
        body { background-color:#f0f8ff; /* 薄青色 */line-height: 1.00; /* 行間を1.5倍に設定 */
         h1 {color: #000080; /* 青色 */}
         p {color: #333333; /* 灰色 */ }
      </style>
    </head>
    <body>

      <h1>Haul!</h1>
                <h2>新規投稿</h2>
                <input type="date" name="today" id="today">
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            
            <div class="body">
              
                <textarea name="post[body]" placeholder="文章を入力してください"></textarea>
            </div>
  <input type="file" name="image">
 
  <button>投稿</button>
  <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</form>