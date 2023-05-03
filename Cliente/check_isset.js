function checkForm(){
    var nome = document.getElementById("name");
    if(nome && nome.value){
        return true;
    }
    else{
        alert("preencha o campo Nome");
        return false;
    }

}