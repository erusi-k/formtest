<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>  
    <form action="/create" method="POST">
    @csrf
        <table>
                <tr>
                    <th>お名前</th>
                    <td>{{$item->fullname}}</td>
                </tr>
                <tr>
                    <th>性別</th>
                    @if($item->gender == 1)
                    <th>男性</th>
                    @elseif($item->gender == 2)
                    <th>女性</th>
                    @endif
                </tr>   
                
                <tr>
                    <th>メールアドレス</th>
                    <td>{{$item->email}}</td>
                </tr>
                <tr>
                    <th>郵便番号</th>
                    <td>{{$item->postcode}}</td>
                </tr>
                    <th>住所<span>※</span></th>
                    <td>{{$item->address}}</td>
                </tr>
                <tr>
                    <th>建物名</th>
                    <td>{{$item->building_name}}</td>
                </tr>
                <tr>
                    <th>ご意見</th>
                    <td>{{$item->opinion}}</td>
                </tr>
        </table>
        <input name="back" type="submit" value="戻る">
        <input type="submit" value="送信">
    </form>
</body>
</html>