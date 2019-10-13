function validar(campo, alerta, label){
    console.log(campo)
    console.log(alerta)
    let n = campo.value;

    if(n.length == 0 || isNaN(parseFloat(n))){

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

function calcular(){
    let n1 = document.dados.valor1;
    let n2 = document.dados.valor2;

    if(validar(n1, "alerta1", "label1") && validar(n2, "alerta2", "label2")){
        let res = parseFloat(n1.value) + parseFloat(n2.value);
        document.dados.resultado.value = res;
    }
}