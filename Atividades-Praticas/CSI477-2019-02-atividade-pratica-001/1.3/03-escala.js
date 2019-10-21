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

function classificar(){
    var amplitude = document.dados.amplitude
    var intervalo = document.dados.intervalo
    

    if(validar(amplitude,"amplitude","alerta-campos") && validar(intervalo,"intervalo","alerta-campos")){        
        valorAmplitude = amplitude.value
        valorIntervalo = intervalo.value

        magnitude = Math.log10(valorAmplitude) + 3*Math.log10(8*valorIntervalo) - 2.92
        
        if(magnitude < 3.5){
            efeitos = "Geralmente não sentido, mas gravado."
            tipoAlerta = "alert-success"
        }else if(magnitude >= 3.5 && magnitude <= 5.4){
            efeitos = "Às vezes sentido, mas raramente causa danos."
            tipoAlerta = "alert-warning"
        }else if(magnitude >= 5.5 && magnitude <= 6){
            efeitos = "No máximo causa pequenos danos a prédios bem construídos, mas pode danificar seriamente casas construídas em regiões próximas"
            tipoAlerta = "alert-warning"
        }else if(magnitude >= 6.1 && magnitude <= 6.9){
            efeitos = "Pode ser destrutivo em áreas em torno de até 100 km do epicentro"
            tipoAlerta = "alert-danger"
        }else if(magnitude >= 7 && magnitude <= 7.9){
            efeitos = "Grande terremoto. Pode causar sérios danos numa grande faixa."
            tipoAlerta = "alert-danger"
        }else{
            efeitos = "Enorme terremoto. Pode causar graves danos em muitas áreas mesmo que estejam a centenas de quilômetros."
            tipoAlerta = "alert-danger"
        }

        var alertaClassificacao = document.getElementById("alerta-classificacao")
        var spanalertaClassificacao = document.getElementById("span-alerta-classificacao")
        
        alertaClassificacao.style.display = "block"
        alertaClassificacao.className = "alert meu-alerta " + tipoAlerta

        spanalertaClassificacao.innerHTML = 
        "Magnitude: " + magnitude.toFixed(2) + "<br/>" + 
        "Efeitos: " + efeitos + "<br/>"
    }
}