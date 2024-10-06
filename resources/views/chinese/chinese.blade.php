<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日本語から中国語</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/seedrandom/2.3.11/seedrandom.min.js"></script>
    @vite(['resources/css/app.css'])
    <style>
        body {
            margin-top: 60px;
    
            text-align: center;
    
            
        }
    </style>
</head>
<body class='antialiased'>
@include('uptab')
@include('chinese/chinese/chinese-support')


@if ($question_type == 'j_to_c' || $question_type == 'normal')
    @include('chinese.chinese.chinese-normal')
@elseif ($question_type == 'select' && count($errors) === 0)
    @include('chinese.chinese.chinese-select')
@elseif ($question_type == 'noWord')
    @include('chinese.chinese.chinese-noword')
@endif
</body>

</html>
