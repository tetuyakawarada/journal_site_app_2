<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>article show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <h1>{{ $article->title }}</h1>
    <p>{!! nl2br(e($article->body)) !!}</p>

    <div>
        <div class="button-group">
            <button onclick="location.href='/articles'">一覧へ戻る</button>
            <button onclick="location.href='/articles/{{ $article->id }}/edit'">編集する</button>

            <form action="/articles/{{ $article->id }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false}">
            </form>
        </div>
    </div>
</body>

</html>
