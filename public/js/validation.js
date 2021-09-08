function inputCheck() {
  var inputValue = document.getElementById( "name" ).value;
  if(!inputValue){
    document.getElementById( "check" ).innerHTML = '名前は必須です。';
  }
  
}