function validacao () {
  var nome = document.insere.fname.value.trim();
  var email = document.insere.femail.value.trim();

      if (nome==="") {
        var nome = document.getElementById('nomeerror');
        nome.style.display = 'block';
        document.insere.fname.focus();
        return false;
      }
      else if (email==="") {
        var email = document.getElementById('emailerror');
        email.style.display = 'block';
        document.insere.femail.focus();
        return false;
      }
      else {
        return true;
      }
}

function validacodigo() {
  var code = document.consulta.codigo.value;

        if (code==="" || code < 1) {
          var code = document.getElementById('codeerror');
          code.style.display = 'block';
          document.consulta.codigo.focus();
          return false;
        }
  }

//$('nome').val() === ""
//$('#nomeerror').show(); **/
