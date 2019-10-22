function resultado(){
    var grupo1 = document.getElementsByName('grupo1')
    var grupo2 = document.getElementsByName('grupo2')
    var grupo3 = document.getElementsByName('grupo3')
    var grupo4 = document.getElementsByName('grupo4')

    var alerta1 = document.getElementById('alerta1')
    var alerta2 = document.getElementById('alerta2')
    var alerta3 = document.getElementById('alerta3')
    var alerta4 = document.getElementById('alerta4')

    var span1 = document.getElementById('span1')
    var span2 = document.getElementById('span2')
    var span3 = document.getElementById('span3')
    var span4 = document.getElementById('span4')

    var resposta1correta = grupo1[1]
    var resposta2correta = grupo2[2]
    var resposta3correta = grupo3[3]
    var resposta4correta = grupo4[3]

    if(resposta1correta.checked){
        tipoAlerta1 = "alert-success"
        resultado1 = "Parabéns! Você acertou!"
    }else{
        tipoAlerta1 = "alert-danger"
        resultado1 = "Que pena! Você errou. A resposta correta é 'Sabonete' "
    }

    if(resposta2correta.checked){
        tipoAlerta2 = "alert-success"
        resultado2 = "Parabéns! Você acertou!"
    }else{
        tipoAlerta2 = "alert-danger"
        resultado2 = "Que pena! Você errou. A resposta correta é  'Algodão Doce' "
    }

    if(resposta3correta.checked){
        tipoAlerta3 = "alert-success"
        resultado3 = "Parabéns! Você acertou!"
    }else{
        tipoAlerta3 = "alert-danger"
        resultado3 = "Que pena! Você errou. A resposta correta é 'Máquina de lavar' "
    }

    if(resposta4correta.checked){
        tipoAlerta4 = "alert-success"
        resultado4 = "Parabéns! Você acertou!"
    }else{
        tipoAlerta4 = "alert-danger"
        resultado4 = "Que pena! Você errou. A resposta correta é 'Chave de fenda' "
    }

    alerta1.style.display = "block"
    alerta1.className = "alert meu-alerta " + tipoAlerta1
    alerta2.style.display = "block"
    alerta2.className = "alert meu-alerta " + tipoAlerta2
    alerta3.style.display = "block"
    alerta3.className = "alert meu-alerta " + tipoAlerta3
    alerta4.style.display = "block"
    alerta4.className = "alert meu-alerta " + tipoAlerta4

    span1.innerHTML = resultado1
    span2.innerHTML = resultado2
    span3.innerHTML = resultado3
    span4.innerHTML = resultado4

    // var amplitude = document.dados.amplitude
    // var intervalo = document.dados.intervalo
    

    // if(validar(amplitude,"amplitude","alerta-campos") && validar(intervalo,"intervalo","alerta-campos")){        
    //     valorAmplitude = amplitude.value
    //     valorIntervalo = intervalo.value

    //     magnitude = Math.log10(valorAmplitude) + 3*Math.log10(8*valorIntervalo) - 2.92
        
    //     if(magnitude < 3.5){
    //         efeitos = "Geralmente não sentido, mas gravado."
    //         tipoAlerta = "alert-success"
    //     }else if(magnitude >= 3.5 && magnitude <= 5.4){
    //         efeitos = "Às vezes sentido, mas raramente causa danos."
    //         tipoAlerta = "alert-warning"
    //     }else if(magnitude >= 5.5 && magnitude <= 6){
    //         efeitos = "No máximo causa pequenos danos a prédios bem construídos, mas pode danificar seriamente casas construídas em regiões próximas"
    //         tipoAlerta = "alert-warning"
    //     }else if(magnitude >= 6.1 && magnitude <= 6.9){
    //         efeitos = "Pode ser destrutivo em áreas em torno de até 100 km do epicentro"
    //         tipoAlerta = "alert-danger"
    //     }else if(magnitude >= 7 && magnitude <= 7.9){
    //         efeitos = "Grande terremoto. Pode causar sérios danos numa grande faixa."
    //         tipoAlerta = "alert-danger"
    //     }else{
    //         efeitos = "Enorme terremoto. Pode causar graves danos em muitas áreas mesmo que estejam a centenas de quilômetros."
    //         tipoAlerta = "alert-danger"
    //     }

    //     var alertaClassificacao = document.getElementById("alerta-classificacao")
    //     var spanalertaClassificacao = document.getElementById("span-alerta-classificacao")
        
    //     alertaClassificacao.style.display = "block"
    //     alertaClassificacao.className = "alert meu-alerta " + tipoAlerta

    //     spanalertaClassificacao.innerHTML = 
    //     "Magnitude: " + magnitude.toFixed(2) + "<br/>" + 
    //     "Efeitos: " + efeitos + "<br/>"
    // }
}