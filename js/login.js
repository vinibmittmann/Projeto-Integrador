function executaLogin(){

    var usuario = document.getElementsByName('field_nomeLogin')[0].value;
    var senha = document.getElementsByName('field_senha')[0].value;

    usuario = usuario.toLowerCase();

    if(usuario != "" && senha!= ""){

      if(usuario == "vinicius" && senha == "12345")
          return true;
      else{
        alert("usuario = vinicius || senha = 12345")
        return false
      }

    }else{

      if(usuario == "")
        alert("Inserir nome de usuario");
      if(senha == "")
        alert("Inserir senha");

    }

}