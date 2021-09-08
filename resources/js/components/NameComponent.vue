<template>
    <div>
        <p>rarara</p>
    </div>
</template>


<script>
export default {
    data(){
        return{
            firstName:'',
            error:{}
        }
    },
    watch:{
        firstName:function(value){
            if(value === ''){
                this.error.name = 'お名前は必須です';
            }
        }
    }
}
</script>