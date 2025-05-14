<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規投稿</title>
</head>
<body>
    <h1>新規投稿</h1>

    @if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        
        <table>
            <tr>
        <th>タイトル</th>
        <td>
        <input type="text" name="title">
        </td>
</tr>
<tr>
        <th>本文</th>
        <td>
        <textarea name="content" rows="10" cols="60"></textarea>
        </td>
        </tr>
</table>
        <button type="submit">投稿</button>
    </form>
</body>
</html>