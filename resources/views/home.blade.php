<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="/confirm" method="POST" id="app">
    @csrf

    @foreach ($errors->get('email') as $errorMsg)
    {{$errorMsg}}
    @endforeach
    <table>
                <tr>
                    <th>お名前<span>※</span></th>
                    <label>
                        <td><input type="text" v-model="lastname" name="lastname" value="{{old('lastname')}}"></td>
                        <td><input type="text" v-model="firstname" name="fullname"></td>
                    </label>
                </tr>
                    <tr>
                        <td v-if="error.name">@{{error.name}}</td>
                        <div v-else>
                            <td>例）山田</td>
                            <td>例）太郎</td>
                        </div>
                    </tr>
                <tr>
                    <th><input type="radio" name="gender" value=1 v-model="gender">男性</th>
                    <th><input type="radio" name="gender" value=2 v-model="gender">女性</th>
                </tr>   
                
                <tr>
                    <th>メールアドレス<span>※</span></th>
                    <td><input type="email" name="email" v-model="email" value="{{ old('email') }}"></td>
                </tr>
                <tr v-if="error.email">
                    <th>@{{error.email}}
                </tr>
                <tr v-else>
                    <th>例）test@example.com</th>
                </tr>
                <tr>
                    <th>郵便番号<span>※</span></th>
                    <td><input type="text" name="postcode" v-model="postcode" onKeyUp="AjaxZip3.zip2addr('postcode','','address','address');" value="{{old('postcode')}}"/></td>
                </tr>
                <tr v-if="error.postcode">
                    <th>@{{error.postcode}}</th>
                </tr>
                <tr v-else>
                    <th>例）123-4567</th>
                </tr>
                <tr>
                    <th>住所<span>※</span></th>
                    <td><input type="text"　name="address" v-model="address" value="{{old('address')}}"></td>
                </tr>
                <tr v-if="error.address">
                    <tr>@{{error.address}}</tr>
                </tr>
                <tr v-else>
                    <th>例）東京都渋谷区千駄ヶ谷1-2-3</th>
                </tr>
                <tr>
                    <th>建物名</th>
                    <td><input type="text" name="building_name" value="{{old('building_name')}}"></td>
                </tr>
                <tr>
                    <th>例）千駄ヶ谷マンション101</th>
                </tr>
                <tr>
                    <th>ご意見<span>※</span></th>
                    <td><textarea name="opinion"  cols="30" rows="10" v-model="opinion" >{{old('opinion')}}</textarea></td>
                </tr>
                <tr v-if="error.opinion">
                    <th>@{{error.opinion}}</th>
                </tr>
            </table>
        <input type="submit" value="確認">
    </form>
<script>
    // const app = new Vue({
    //     el:'#app',
    //     data(){
    //     return{
    //         lastname:'',
    //         firstname:'',
    //         gender:1,
    //         email:'',
    //         postcode:'',
    //         address:'',
    //         opinion:'',
    //         error:{}
    //     }
    // },
    // watch:{
    //     lastname:function(value){
    //         if(value === ''){
    //             this.error.name='お名前は必須です'
    //         }else {
    //             this.error.name = '';
    //         }
    //     },
    //     firstname:function(value){
    //         if(value === ''){
    //             this.error.name='お名前は必須です'
    //         }else {
    //             this.error.name = '';
    //         }
    //     },

    //     email:function(value){
    //         const reg = new RegExp(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i);
    //         if(value === ''){
    //             return this.error.email = 'メールアドレスは必須です。';
    //         }
    //         else if(!reg.test(value)){
    //             this.error.email = 'メールアドレス形式で入力してください。'
    //         }else{
    //             this.error.email = '';
    //         }
    //     },

        

        
    //     postcode:function(value){
            
    //         if(value === ''){
    //             this.error.postcode = '郵便番号は必須です。'
    //             this.error.postcode = '';
    //         }
    //     },

        
    //     address:function(value){
    //         if(value === ''){
    //             this.error.address = '住所は必須です。'
    //         }else{
    //             this.error.address = '';
    //         }
    //     },

    //     opinion:function(value){
    //         if(value === ''){
    //             this.error.opinion = 'ご意見は必須です。'
    //         }else{
    //             this.error.opinion = '';
    //         }
    //     },

    // },


    // })
</script>
</body>
</html>