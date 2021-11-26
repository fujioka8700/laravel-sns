<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    きたこれ
    @foreach ($articles as $article)
        {{ $article->id }}
        {{ $article->title }}
        {{ $article->body }}
    @endforeach
</body>
</html>

