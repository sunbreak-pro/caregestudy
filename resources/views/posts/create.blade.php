<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>本文</h2>
                <textarea name ="post[body]" placeholder="今日も一日お疲れ様でした。">{{ old('post.body') }}</textarea>
                <p class="body_error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="category">
                <h2>カテゴリ</h2>
                    <select name="post[category_id]">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>