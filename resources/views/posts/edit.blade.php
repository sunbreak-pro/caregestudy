<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog name</title>
    </head>
    <body>
        <h1 class="content">編集画面</h1>
        <div class='content'>
            <form action="/posts/{{ $post->id }}" method ="POST">
                @csrf
                @method('PUT')
                <div class='content_title'>
                <h2>タイトル</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
                </div>
        <div class='content_body'>
            <h2>本文</h2>
            <input type="text" name='post[body]' value="{{ $post->body }}">
        </div>
        <input type="submit" value="保存">
    </form>
</div>
</body>
</html>