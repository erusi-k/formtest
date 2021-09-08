<template>
    <div class="app">
            <table>
                
                <tr>
                    <th>お名前<span>※</span></th>
                    <td><input type="text" v-model="lastname" name="lastname"></td>
                    <td><input type="text" v-model="firstname" name="firstname"></td>
                </tr>
                    <tr>
                        <td v-if="error.name"><p>{{error.name}}</p></td>
                        <div v-else>
                            <td><p>例）山田</p></td>
                            <td><p>例）太郎</p></td>
                        </div>
                    </tr>
                <tr>
                    <input type="radio" name="gender" value="男性" v-model="gender">男性
                    <input type="radio" name="gender" value="女性" v-model="gender">女性
                </tr>   
                
                <tr>
                    <th>メールアドレス<span>※</span></th>
                    <td><input type="email" name="email" id="" v-model="email"></td>
                </tr>
                <tr v-if="error.email">
                    <p>{{error.email}}</p>
                </tr>
                <tr v-else>
                    <p>例）test@example.com</p>
                </tr>
                <tr>
                    <th>郵便番号<span>※</span></th>
                    <td><input type="text" v-model="postNumber"></td>
                </tr>
                <tr v-if="error.postNumber">
                    <p>{{error.postNumber}}</p>
                </tr>
                <tr v-else>
                    <p>例）123-4567</p>
                </tr>
                <tr>
                    <th>住所<span>※</span></th>
                    <td><input type="text" v-model="postCode"></td>
                </tr>
                <tr v-if="error.postCode">
                    <p>{{error.postCode}}</p>
                </tr>
                <tr v-else>
                    <p>例）東京都渋谷区千駄ヶ谷1-2-3</p>
                </tr>
                <tr>
                    <th>建物名</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <p>例）千駄ヶ谷マンション101</p>
                </tr>
                <tr>
                    <th>ご意見<span>※</span></th>
                    <td><textarea name="" id="" cols="30" rows="10" v-model="opinion"></textarea></td>
                </tr>
                <tr v-if="error.opinion">
                    <p>{{error.opinion}}</p>
                </tr>
            </table>

            <button @click="upForm">確認</button>
            
    </div>
    
</template>

<script>
export default {
    
    data(){
        return{
            lastname:'',
            firstname:'',
            gender:'男性',
            email:'',
            postNumber:'',
            postCode:'',
            opinion:'',
            error:{}
        }
    },
    watch:{
        lastname:function(value){
            if(value === ''){
                this.error.name='お名前は必須です'
            }else {
                this.error.name = '';
            }
        },
        firstname:function(value){
            if(value === ''){
                this.error.name='お名前は必須です'
            }else {
                this.error.name = '';
            }
        },

        email:function(value){
            const reg = new RegExp(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i);
            if(value === ''){
                return this.error.email = 'メールアドレスは必須です。';
            }
            else if(!reg.test(value)){
                this.error.email = 'メールアドレス形式で入力してください。'
            }else{
                this.error.email = '';
            }
        },

        postNumber:function(value){
            if(value === ''){
                this.error.postNumber = '郵便番号は必須です。'
            }else{
                this.error.postNumber = '';
            }
        },

        postCode:function(value){
            if(value === ''){
                this.error.postCode = '住所は必須です。'
            }else{
                this.error.postCode = '';
            }
        },

        opinion:function(value){
            if(value === ''){
                this.error.opinion = 'ご意見は必須です。'
            }else{
                this.error.opinion = '';
            }
        },

    },

        methods:{
            upForm(){
                if(this.lastname === ''　|| this.firstName ===''){
                    this.error.name = 'お名前は必須です';
                }if(this.email ===''){
                    this.error.email = 'メールアドレスは必須です。';
                }if(this.postCode === ''){
                    this.error.postCode = '住所は必須です。'
                }if(this.opinion === ''){
                    this.error.opinion = 'ご意見は必須です。'
                }else{
                    const full = this.lastname.concat(this.firstname);
                    const sendData = {
                        fullname:full,
                        gender:this.getnder,
                        email:this.email,
                        postcode:this.postcode,
                        address:this.address,
                        opinion:this.opinion,
                    }
                }
                
            }
        }
    
}

</script>