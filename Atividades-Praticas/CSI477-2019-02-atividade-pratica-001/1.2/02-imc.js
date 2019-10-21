function validar(campo, label, alerta){
    let n = campo.value;

    if(n.length == 0){

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
    var altura = document.dados.altura
    var peso = document.dados.peso
    

    if(validar(altura,"altura","alerta-campos") && validar(peso,"peso","alerta-campos")){        
        valorAltura = altura.value/100
        valorPeso = peso.value

        imc = valorPeso/(valorAltura*valorAltura)

        if(imc < 18.5){
            situacao = "Subnutrição"
            tipoAlerta = "alert-danger"
        }else if(imc >= 18.5 && imc <= 24.9){
            situacao = "Peso saudável"
            tipoAlerta = "alert-success"
        }else if(imc >= 25 && imc <= 29.9){
            situacao = "Sobrepeso"
            tipoAlerta = "alert-warning"
        }else if(imc >= 30 && imc <= 34.9){
            situacao = "Obesidade grau 1"
            tipoAlerta = "alert-danger"
        }else if(imc >= 35 && imc <= 39.9){
            situacao = "Obesidade grau 2"
            tipoAlerta = "alert-danger"
        }else{
            situacao = "Obesidade grau 3"
            tipoAlerta = "alert-danger"
        }

        menorPesoIdeal = (valorAltura * valorAltura * 18.5).toFixed(2)
        maiorPesoIdeal = (valorAltura * valorAltura * 24.9).toFixed(2)

        var alertaCalculo = document.getElementById("alerta-calculo")
        var spanAlertaCalculo = document.getElementById("span-alerta-calculo")
        
        alertaCalculo.style.display = "block"
        alertaCalculo.className = "alert meu-alerta " + tipoAlerta

        spanAlertaCalculo.innerHTML = 
        "Seu IMC: " + imc.toFixed(2) + "<br/>" + 
        "Sua situação: " + situacao + "<br/>" +
        "Faixa de peso ideal para a sua altura: " + menorPesoIdeal + " kg" + " a " + maiorPesoIdeal + " kg"
    }
}