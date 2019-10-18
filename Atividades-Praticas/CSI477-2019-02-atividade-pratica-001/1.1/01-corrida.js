function validar(campo, label){
    let n = campo.value;

    if(n.length == 0){

        //Erro
        //Exibir alerta:
        document.getElementById("alerta").style.display = "block";
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
        document.getElementById("alerta").style.display = "none";
        campo.classList.remove("is-invalid");
        campo.classList.add("is-valid");
    
        document.getElementById(label).classList.remove("text-danger");
        document.getElementById(label).classList.add("text-success");

        return true
}

function adicionar(){
    var largada = document.dados.largada
    var competidor = document.dados.competidor
    var tempo = document.dados.tempo

    if(validar(largada,"largada") && validar(competidor,"competidor") && validar(tempo,"tempo")){
        if(!adicionar.didRun){
            document.getElementById('span-info').parentNode.remove()
            adicionar.didRun = true
        }

        var dados = document.getElementById('dados')
        var tbodyParcial = document.getElementById('tbody-parcial')

        var tr = document.createElement('tr')

        var td1 = document.createElement('td')
        var td2 = document.createElement('td')
        var td3 = document.createElement('td')

        var txtLargada = document.createTextNode(largada.value)
        var txtCompetidor = document.createTextNode(competidor.value)
        var txtTempo = document.createTextNode(tempo.value)

        td1.className = "td-largada"
        td2.className = "td-competidor"
        td3.className = "td-tempo"

        td1.appendChild(txtLargada)
        td2.appendChild(txtCompetidor)
        td3.appendChild(txtTempo)

        tr.className="tr-parcial"

        tr.appendChild(td1)
        tr.appendChild(td2)
        tr.appendChild(td3)

        tbodyParcial.appendChild(tr)

        dados.reset()
        largada.focus()
    }
}

function ordenaTabela() {
    var tabela, rows, switching, i, primeiroValor, segundoValor, shouldSwitch;
    tabela = document.getElementById("tabela-parcial");
    switching = true;
    /* Make a loop that will continue until
    no switching has been done: */
    while (switching) {
      // Start by saying: no switching is done:
      switching = false;
      rows = tabela.rows;
      /* Loop through all table rows (except the
      first, which contains table headers): */
      for (i = 1; i < (rows.length - 1); i++) {
        // Start by saying there should be no switching:
        shouldSwitch = false;
        /* Get the two elements you want to compare,
        one from current row and one from the next: */
        primeiroValor = rows[i].getElementsByTagName("td")[2];
        segundoValor = rows[i + 1].getElementsByTagName("td")[2];
        // Check if the two rows should switch place:
        if (primeiroValor.innerHTML > segundoValor.innerHTML) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
      if (shouldSwitch) {
        /* If a switch has been marked, make the switch
        and mark that a switch has been done: */
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
      }
    }
  }

function colocacao(){
    if(!colocacao.didRun){
        
        colocacao.didRun = true

        var largadas = document.getElementsByClassName('td-largada')

        document.getElementById("tabela-parcial").style.display = "none"
        document.getElementById("dados").remove()
        document.getElementById("tabela-completo").style.display = "table"

        ordenaTabela()

        var tempos = document.getElementsByClassName('td-tempo')

        var largadasOrdenadasEmNumero = []

        for(i = 0; i < largadas.length; i ++){
            largadasOrdenadasEmNumero[i] = parseInt(largadas[i].textContent)
        }

        largadasOrdenadasEmNumero.sort()

        posicoes = []
        resultados = []

        for(i = 0; i < largadasOrdenadasEmNumero.length; i++){
            posicoes[i] = largadasOrdenadasEmNumero[i]
            resultados[i] = "-"
        }

        resultados[0] = "Vencedor(a) !"

        for(i = 0; i < (posicoes.length - 1); i++){
            if(tempos[i].textContent == tempos[i+1].textContent){
                posicoes[i+1] = posicoes[i]
                if(posicoes[i] == 1){
                    resultados[i+1] = "Vencedor(a) !"
                }
            }
        }

        var competidores= document.getElementsByClassName('td-competidor')

        var tbodyCompleto = document.getElementById('tbody-completo')

        for(i = 0; i < competidores.length; i++){
            var tr = document.createElement('tr')

            var td1 = document.createElement('td')
            var td2 = document.createElement('td')
            var td3 = document.createElement('td')
            var td4 = document.createElement('td')
            var td5 = document.createElement('td')

            var txtPosicao = document.createTextNode(posicoes[i])
            var txtLargada = document.createTextNode(largadas[i].textContent)
            var txtCompetidor = document.createTextNode(competidores[i].textContent)
            var txtTempo = document.createTextNode(tempos[i].textContent)
            var txtResultado = document.createTextNode(resultados[i])

            td1.appendChild(txtPosicao)
            td2.appendChild(txtLargada)
            td3.appendChild(txtCompetidor)
            td4.appendChild(txtTempo)
            td5.appendChild(txtResultado)

            tr.appendChild(td1)
            tr.appendChild(td2)
            tr.appendChild(td3)
            tr.appendChild(td4)
            tr.appendChild(td5)

            tbodyCompleto.appendChild(tr)
        }
    }
    // var tempos_em_valor = []

    // for(i = 0; i < tempos.length; i++){
    //     tempos_em_valor[i] = tempos[i].textContent
    // }

    //  sortWithIndexes(tempos_em_valor)
    //  var indices_ordenados = tempos_em_valor.sortIndexes

    //  var tempos_ordenados = tempos_em_valor.sort()

    // resultados = []

    // for(i = 0; i < competidores.length; i++){
    //     resultados[i] = "-"
    // }

    // for(i = 0; i < competidores.length; i++){
    //     resultados[i] = "Vencedor(a)!"
    //     if(i + 1 < competidores.length){
    //         if(tempos_ordenados[i + 1] > tempos_ordenados[i]) break
    //     }
    // }

    

}