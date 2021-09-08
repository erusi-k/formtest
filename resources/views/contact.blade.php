<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="/confirm" method="POST" id="app">
        <table>
            @csrf
            <tr>
                <th>お名前<span>※</span></th>
                <td><input　id="name" type="text"></td>
                <p class="cheak"><span></span><p>
                <td><input type="text"></td>
            </tr>
            
                <tr>
                    <td><p>例）山田</p></td>
                    <td><p>例）太郎</p></td>
                </tr>
            <tr>
                <input type="radio" name="gender" value="男性" >男性
                <input type="radio" name="gender" value="女性" >女性
            </tr>
            <tr>
                <th>メールアドレス<span>※</span></th>
                <td><input type="email" name="" id=""></td>
            </tr>
            <tr>
                <th>郵便番号<span>※</span></th>
                <td><input type="text" name="zip11" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');"></td>
            </tr>
            <tr>
                <th>住所<span>※</span></th>
                <td><input type="text" name="addr11" size="60"></td>
            </tr>
            <tr>
                <th>建物名</th>
                <td><input type="text"></td>
            </tr>
            <tr>
                <th>ご意見<span>※</span></th>
                <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
            </tr>
        </table>
        <input type="submit" value="確認">
    </form>
<script src="{{asset('/js/validation.js')}}"></script>
</body>
</html>