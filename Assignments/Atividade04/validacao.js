function hasNumber(myString) {
    return /\d/.test(myString);
}

function validar(campo, alerta, label, indicador){
    console.log(campo)
    console.log(alerta)
    let n = campo.value;


    if(indicador == "numero"){
        condicaoInvalida = n.length == 0 || isNaN(parseFloat(n))
    } else if(indicador == "texto"){
        condicaoInvalida = n.length == 0 || hasNumber(n)
    }

    if(condicaoInvalida){

        //Erro
        //Exibir alerta:
        document.getElementById(alerta).style.display = "block";
        //Reportar como inválido
        campo.classList.add("is-invalid");
        //Reportar o label como inválido/atenção:
        document.getElementById(label).classList.add("text-danger");
        //Finalizar
        campo.value="";
        campo.focus();
        return false;
    }
        //Tudo correto
        document.getElementById(alerta).style.display = "none";
        campo.classList.remove("is-invalid");
        campo.classList.add("is-valid");
    
        document.getElementById(label).classList.remove("text-danger");
        document.getElementById(label).classList.add("text-success");

        return true
}

function validaCampos(){
    nome = document.dados.nome
    peso = document.dados.peso
    valor  = document.dados.valor
    estoqueInicial = document.dados.estoqueInicial
    botao = document.querySelector('button[type="submit"]')

    // if ...
    botao.setAtribute("type","button")
}