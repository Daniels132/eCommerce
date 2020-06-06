function busca() {
    var cep = document.querySelector("input[name=cep]");
    var endereco = document.querySelector("input[name=end]");
    var cidade = document.querySelector("input[name=cid]");
    var estado = document.querySelector("input[name=est]");
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