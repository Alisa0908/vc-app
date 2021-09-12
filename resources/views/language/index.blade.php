<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>VCApp</title>
</head>
<body>
{{-- 繰り返す必要のないulタグは外 --}}
    <ul>
        @foreach ($language as $lang)
            <li>{{ $lang }}</li>
        @endforeach
    </ul>
</body>
</html>