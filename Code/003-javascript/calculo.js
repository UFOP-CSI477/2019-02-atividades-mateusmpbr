function validar(campo){
    let n = campo.value;
    console.log(n);
    if (n.length == 0 || isNaN(parseFloat(n))){
        window.alert("Informe o valor corretamente!");

        campo.value = "";
        campo.focus();
        return false;
    } 
    return true;
}

function calcular(){
    let n1 = document.dados.valor1;
    let n2 = document.dados.valor2;

    if(validar(n1) && validar(n2)){
        let res = parseFloat(n1.value) + parseFloat(n2.value);
        document.dados.resultado.value = res;
    }
}