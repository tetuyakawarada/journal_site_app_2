<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>article index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div class="contener">
        <h1 class="title" id="title">タイトル一覧</h1>
        <ul>
            @foreach ($articles as $article)
                {{-- <li id="article-list"><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></li> --}}

                <button type="text" class="article-list" data-modal-link="{{ $article->id }}" name="id"
                    value="{{ $article->id }}">
                    {{ $article->title }}</button>
                <br>

                <div class="article-modal" data-modal-content="{{ $article->id }}" name="id" value="{{ $article->id }}">

                    <p>記事ID:{{ $article->id }}</p>
                    <h3>{{ $article->title }}</h3>
                    <p>{{ $article->body }}</p>

                    <div class="close-modal">
                        <i class="fa fa-2x fa-times"></i>
                    </div>
                </div>
            @endforeach
        </ul>


        <div class="article-modal-wapper" id="article-modal">
            <div class="article-modal">

                <div class="">この記事のIDは <span class="title-set"></span> です</div>
                <div class="title-set"></div>
                <div id="edit_area"></div>


                {{-- <p class="aaa">{{ $article->title }}</p> --}}
                <p class="aaa"><?php echo $articles[6]['title']; ?></p>
                {{-- <p>{{ $article->body }}</p> --}}
                <p><?php echo $articles[6]['body']; ?></p>
                <div class="close-modal">
                    <i class="fa fa-2x fa-times"></i>
                </div>
            </div>
        </div>


        <a href="/articles/create">新規登録</a>
        <button onclick="location.href='/articles/create'">新規登録</button>
    </div>

    {{-- <div class="hyouji">表示</div> --}}
    {{-- <h1 id="hede-sample">hedeメソッドのテスト</h1> --}}
    {{-- <h1 id="fadeout-sample">fadeoutメソッドのテスト</h1> --}}
    {{-- <h1 id="slideup-sample">slideupメソッドのテスト</h1> --}}


    <div class="modal-bg js-modalclose"></div>


    {{-- <div>☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆</div>
    @foreach ($articles as $article)
        <button type="text" data-modal-link="{{ $article->id }}" name="id"
            value="{{ $article->id }}">モーダル{{ $article->id }}を開く</button>

        <div class="modal" data-modal-content="{{ $article->id }}" name="id" value="{{ $article->id }}">
            <p>モーダル{{ $article->id }}のコンテンツです。</p>
            <button class="js-modalclose">閉じる</button>
            <div>{{ $article->title }}</div>
            <div>{{ $article->body }}</div>
        </div>
    @endforeach
    <div>☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆</div> --}}


    <div id="hover-test">
        <h1 id="hover-title">ホバーのテストタイトル</h1>
        <p id="hover-body">ホバーのテスト本文<br>ホバーのテスト本文<br>ホバーのテスト本文</p>
    </div>


    <script src="{{ mix('js/sample.js') }}"></script>
</body>

</html>
