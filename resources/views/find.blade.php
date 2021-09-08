<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>管理システム</p>
    <form action="{{url('/find')}}" method="POST">
        @csrf
        <input type="text" name="name" value="{{$name ?? ''}}">
        <input type="radio" name="gender" value="">全て
        <input type="radio" name="gender" value=1>男性
        <input type="radio" name="gender" value=2>女性
        <input type="date" name="fistday">
        <input type="date" name="lastday">
        <input type="text" name="email" value="{{$email ?? ''}}">
        <input type="submit" value="検索">
        <input type="reset">
    </form>
    @if(@isset($data))
        @foreach($data as $item)
            <table>
                <tr>
                    <th>{{$item->email}}</th>
                    <th>{{$item->fullname}}</th>
                    <th>{{$item->gender}}</th>
                </tr>
            </table>
            
        @endforeach
        {{$data->appends(request()->input())->links()}}
    @endif    
   
</body>
</html>