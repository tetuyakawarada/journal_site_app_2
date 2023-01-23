<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>article index</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div class="contener">
        <h1 class="title">タイトル一覧</h1>
        <ul>
            @foreach ($articles as $article)
                <!-- // リンク先をidで取得し名前で出力 -->
                <li><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></li>
            @endforeach
        </ul>

        <a href="/articles/create">新規登録</a>
        <button onclick="location.href='/articles/create'">新規登録</button>
    </div>

</body>

</html>
