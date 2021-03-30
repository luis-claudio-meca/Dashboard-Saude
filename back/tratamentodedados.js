function ConsultasdeHoje(consultas, dadosdata, dadosespecialidade, dadoshora, dadosmedico, filtro) {
    
    for (let i = 0; i < 3; i++) {
        consultas.forEach(element => {
            let x = Dadosdata(element.data, dadosdata, FormataData(i));
          
            if (x[0]) {
                let h = Dadoshora(element.hora, dadoshora)
                //***********Gera HTML  **********/
                let z, y = [];
                dadosmedico.forEach(value => {
                    if (element.medico == value.id) {
                        z = value.especialidade;
                        y[0] = value.nome;
                    }
                });
                if (filtro == 0) {

                    dadosespecialidade.forEach(value => {
                        if (z == value.id) {
                            y[1] = value.descricao;
                        }
                    });
                } else {
                    dadosespecialidade.forEach(value => {
                        if (z == value.id && z == filtro) {
                            y[1] = value.descricao;
                        }
                    });
                }
                if(y[1] != undefined){
        
                    document.getElementById("root-" + (i + 1)).innerHTML += ('<div id='+cont+' class="card shadow lift o-hidden d-flex col-xl-3 col-lg-5 col-sm-10 col-md-10" style="margin: 10px;"><div class="card-body"><div class="row no-gutters align-items-center"><div class="col mr-2 mb-2"><div class="h5 mb-0 font-weight-bold ">' + y[0] + '</div></div><div class="col-auto"><i class="fas fa-user-md fa-3x text-success"></i></div></div><h6 class="card-subtitle mb-2 text-muted">' + y[1] + '</h6><p class="card-text">Nome: ' + element.nome + '<br>Matricula: ' + element.matricula + '<br>Email: ' + element.email + '<br>Tel: ' + element.telefone + '<br>Idade: ' + element.idade + '<br>Horario: ' + h[0] + ' / ' + h[1] + '<br>Data Agendada: ' + x[1] + '</p><button class="text-white '+cont+'" onClick="Cor('+cont+')">Atendido</button></div></div>');
                    cont++
                }
        }
        });
    }
}

function FormataData(i) {
    data = new Date()
    var dia = data.getDate() + i;
    var mes = (data.getMonth() + 1);
    var ano = data.getFullYear();

    if (dia.toString().length == 1) dia = '0' + dia;
    if (mes.toString().length == 1) mes = '0' + mes;
    return dia + '/' + mes + '/' + ano;

}

function Dadosdata(props, dadosdata, now) {
    j = [false,""];
    dadosdata.forEach(element => {
        if (props == element.id) {
            if (now == element.data) {
                j[0] = true;
                j[1] = element.data 
            }
        }
    });
    if (j[0]) return j;
    else return false;

}

function Dadoshora(props, dadoshora) {
    let h = [];
    dadoshora.forEach(element => {
        if (props == element.id) {
            h[0] = element.hora_inicio;
            h[1] = element.hora_fim;
        }
    });
    return h;
}

function ListEspecialidades(dadosespecialidade){
    dadosespecialidade.forEach(element => {
        document.getElementById("inputGroupSelect01").innerHTML +=  '<option value="'+element.id+'">'+element.descricao+'</option>';

    })
   
   
    
}

function Cor(id){
    card_cor = document.getElementById(id);
 
   botton = document.getElementsByClassName(id);
  $(botton).prop('disabled', true);
    botton[0].style.backgroundColor = '#5A5757';
    botton[0].style.color = "#000";
    card_cor.setAttribute('class', "card bg-info text-light shadow lift o-hidden d-flex col-xl-3 col-lg-5 col-sm-10 col-md-10");


}


