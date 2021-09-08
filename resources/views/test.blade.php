<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <div id="app">
        
        <form-component :csrf="{{json_encode(csrf_token())}}"></form-component>
    </div>
<script src="{{mix('/js/app.js')}}"></script>
</body>
</html>