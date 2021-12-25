function pass(){
var n1= document.getElementById("password");
var n2= document.getElementById("passwordT");
    if(n1.value == n2.value){
        return true;
    }
    alert("Girdiğiniz Şifreler Aynı Değil");
    return false;
}
