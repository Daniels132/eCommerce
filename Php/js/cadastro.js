function busca() {
    var cep = document.querySelector("input[name=cep]");
    var endereco = document.querySelector("input[name=endereco]");
    var cidade = document.querySelector("input[name=cidade]");
    var estado = document.querySelector("input[name=estado]");
    var erro = document.getElementById("ceperro");

    var url = `https://viacep.com.br/ws/${cep.value}/json/`;
    if (cep.value.length != 8) {
        cep.style.border = "1px solid red";
        erro.innerHTML = "CEP deve conter 8 Dígitos";
        erro.style.color = "red";
    }
    else {
        fetch(url).then(res => res.json()).then(res => {
            if (res.erro) {
                cep.style.border = "1px solid red";
                erro.innerHTML = "CEP Inválido";
                erro.style.color = "red";
            }
            else {
                endereco.value = res.logradouro;
                cidade.value = res.localidade;
                estado.value = res.uf;

                endereco.disabled = false;
                cidade.disabled = false;
                endereco.disabled = false;
                estado.disabled = false;
                cep.style.border = "1px solid #ced4da";
                erro.innerHTML = "";
            }
        });
    }
}
function checar(obj, erro) {
    erro = document.getElementById(erro);
    if (obj.value == "") {
        obj.style.border = "1px solid red";
        erro.innerHTML = "Campo obrigatório";
        erro.style.color = "red";
    }
    else {
        obj.style.border="1px solid #ced4da";
        erro.innerHTML="";
    }
}