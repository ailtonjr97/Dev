$(document).ready(function() {
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar').toggleClass('active');
  });

});

let descricao = document.getElementsByClassName('descricao-menu');
let teste = document.getElementsByClassName("dropdown-menu");
let icone = document.getElementsByClassName('nav-item');


let myIndex1;
let myIndex2;

$(icone).on("mouseover", function(event) {
  myIndex1 = $(this).index();
})

$(teste).on("mouseover", function(event) {
  myIndex2 = $(this).index();
})

$(teste).hover(
  function() {
    for (let i = 0; i < descricao.length; i++) {
      descricao[myIndex1].style.display = 'block';
    }
  },
  function() {
    for (let i = 0; i < descricao.length; i++) {
      // descricao[myIndex1].style.display = 'none';
    }
  }
);

$(icone).hover(
  function() {
    for (let i = 0; i < descricao.length; i++) {
      descricao[myIndex1].style.display = 'block';
    }
  },
  function() {
    for (let i = 0; i < descricao.length; i++) {
      descricao[myIndex1].style.display = 'none';
    }
  }
);
////////////////////////////////////////////////////////////
let xvm = document.getElementsByClassName("removedor");
let k = 0
let y = document.querySelectorAll('td')
let ya = document.querySelectorAll('td').length
let z = document.querySelectorAll('th')
let za = document.querySelectorAll('th').length
let ta = document.querySelectorAll('tr').length
let restaurador = document.getElementsByClassName('restaurador');


// for (let k = 0; k < za; k++) {
//   let bodies = document.getElementsByTagName('tr').length
//   let xvm = document.getElementsByClassName("removedor");
//   let y = document.querySelectorAll('td')
//   let ya = document.querySelectorAll('td').length
//   let z = document.querySelectorAll('th')
//   let za = document.querySelectorAll('th').length
//   let restaurador = document.getElementsByClassName('restaurador');
//   document.getElementsByClassName("removedor")[k].addEventListener("click", function(event) {
//       z[k].style.display = "none";
//       if(event.target.id == 'botaoId'){
//         for(let h = 0; h < (ta - 1); h++){
//           document.getElementsByClassName('zeroCol')[h].style.display = 'none'
//         }
//       } else if(event.target.id == 'botaoPrioridade'){
//         for(let h = 0; h < (ta - 1); h++){
//           document.getElementsByClassName('primeiraCol')[h].style.display = 'none'
//         }
//       } else if(event.target.id == 'botaoSetor'){
//         for(let h = 0; h < (ta - 1); h++){
//           document.getElementsByClassName('segundaCol')[h].style.display = 'none'
//         }
//       } else if(event.target.id == 'botaoArea'){
//         for(let h = 0; h < (ta - 1); h++){
//           document.getElementsByClassName('terceiraCol')[h].style.display = 'none'
//         }
//       } else if(event.target.id == 'botaoTipo'){
//         for(let h = 0; h < (ta - 1); h++){
//           document.getElementsByClassName('quartaCol')[h].style.display = 'none'
//         }
//       } else if(event.target.id == 'botaoStatus'){
//         for(let h = 0; h < (ta - 1); h++){
//           document.getElementsByClassName('quintaCol')[h].style.display = 'none'
//         }
//       } else if(event.target.id == 'botaoUrgencia'){
//         for(let h = 0; h < (ta - 1); h++){
//           document.getElementsByClassName('sextaCol')[h].style.display = 'none'
//         }
//       } else if(event.target.id == 'botaoDesignado'){
//         for(let h = 0; h < (ta - 1); h++){
//           document.getElementsByClassName('setimaCol')[h].style.display = 'none'
//         }
//       } else if(event.target.id == 'botaoDescrição'){
//         for(let h = 0; h < (ta - 1); h++){
//           document.getElementsByClassName('oitavaCol')[h].style.display = 'none'
//         }
//       } else if(event.target.id == 'botaoAcoes'){
//         for(let h = 0; h < (ta - 1); h++){
//           document.getElementsByClassName('nonaCol')[h].style.display = 'none'
//         }
//       }
//     })
// }

// document.getElementsByClassName('restaurador')[0].addEventListener("click", function(){
//   window.location.reload();
// })

///////////////////////////////////////////////////////////
function fnExcelReport() {
  let xvm = document.getElementsByClassName("removedor");
  let k = 0
  let y = document.querySelectorAll('td')[k]
  let z = document.querySelectorAll('th')[k]
  var tab_text = "<table border='2px'><tr bgcolor='#87AFC6'>";
  var textRange;
  var j = 0;
  tab = document.getElementById('myTable'); // id of table
  tabRows = tab.rows; //get the rows

  // for (var i=0; i< tabRows.length; i++) {
  //   tabRows[i].deleteCell(-1);
  // }

  for (j = 0; j < tab.rows.length; j++) {
    tab_text = tab_text + tab.rows[j].innerHTML + "</tr>";
  }

  var ua = window.navigator.userAgent;
  var msie = ua.indexOf("MSIE ");

  if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) // If Internet Explorer
  {
    txtArea1.document.open("txt/html", "replace");
    txtArea1.document.write(tab_text);
    txtArea1.document.close();
    txtArea1.focus();
    sa = txtArea1.document.execCommand("SaveAs", true, "Say Thanks to Sumit.xls");
  } else //other browser not tested on IE 11
    sa = window.open('data:application/vnd.ms-excel,' + escape(tab_text));

  return (sa);
}


  $(function() {
    let row = 0;

    $('#addRow').click(function() {
      row++;
      let temp_td = '<tr><td scope="row" class="zeroCol">' + row + '</td><td class="primeiraCol"><p class="prioridadeCampo"></p><textarea class="campoId" name="name" rows="2" cols="20" placeholder="Digite aqui a prioridade."></textarea></td><td class="segundaCol"><p class="descri-tabela"></p><label for="setorSelect"></label><select name="setor" class="selectTotal setorSelect"><option value=""></option><option value="Tecnologia da Informação">Tecnologia da Informação</option><option value="Recursos Humanos">Recursos Humanos</option><option value="Engenharia">Engenharia</option></select></td><td class="terceiraCol"><p class="areaCampo"></p><label for="areaSelect"></label><select name="area" class="selectTotal areaSelect"><option value=""></option><option value="Redes">Redes</option><option value="Telefonia">Telefonia</option><option value="Software">Software</option></select></td><td class="quartaCol"><p class="tipoCampo"></p><label for="tipoSelect"></label><select name="tipo" class="selectTotal tipoSelect"><option value=""></option><option value="Liberação de Acesso">Liberação de Acesso</option><option value="Dúvidas">Dúvidas</option><option value="Desenvolvimento">Desenvolvimento</option></select></td><td class="quintaCol"><p>Aberto</p><p></p></td><td class="sextaCol"><p class="urgenciaCampo"></p><label for="urgenciaSelect"></label><select name="urgencia" class="selectTotal urgenciaSelect"><option value=""></option><option value="Normal">Normal</option><option value="Urgente">Urgente</option><option value="Crítico">Crítico</option></select></td><td class="setimaCol"><p class="designadoCampo"></p><label for="designadoSelect"></label><select name="designado" class="selectTotal designadoSelect"><option value=""></option><option value="Ailton de Souza Junior">Ailton de Souza Junior</option><option value="Carlos Henrique">Carlos Henrique</option><option value="Everson Saporetti">Everson Saporetti</option></select></td><td class="oitavaCol"><p>Descrição Teste</p><p></p></td><td class="nonaCol"><button type="button" class="btn btn-success acoes-botao salvar">Salvar</button><button type="button" class="btn btn-success acoes-botao">Chat</button><button type="button" class="btn btn-success acoes-botao editar">Editar</button><button type="button" class="btn btn-danger acoes-botao">Aprovação</button></td></tr>';
      $('tbody').append(temp_td)
    });
  });

// document.getElementsByTagName('tr')[1].style.display = 'none'
let contr = document.getElementsByClassName('editar').length;

for(jk = 0; jk < contr; jk++){
  document.getElementsByClassName('editar')[jk].addEventListener("click", function(event){
    let ia = 0;
    let ib = 0;
    let val = event.path[2].rowIndex;
    let valTeste = event
    console.log(valTeste)
    let select = document.getElementsByClassName('selectTotal').length;
    let m = document.getElementsByClassName('editar');
    let mar = document.getElementsByClassName('editar').length;
    let cellCount = document.getElementsByTagName('tr')[1].cells.length;
    let mct = document.getElementsByClassName('campoId').length;
              for(ia = 0; ia < val; ia++){
                for(ib = 0; ib < cellCount; ib++){
                  if(document.getElementsByTagName('tr')[val].cells[ib].lastElementChild == null){
                    continue
                  } else if(document.getElementsByTagName('tr')[val].cells[ib].lastElementChild.style.display == '' || document.getElementsByTagName('tr')[val].cells[ib].lastElementChild.style.display == 'none'){
                    document.getElementsByTagName('tr')[val].cells[ib].lastElementChild.style.display = 'block'
                  }
                }
              }
            })
          }


let jfctr = document.getElementsByClassName('salvar').length;
for(jf = 0; jf < jfctr; jf++){
  document.getElementsByClassName('salvar')[jf].addEventListener("click", function(event){
    let ia = 0;
    let ib = 0;
    let val = event.path[2].rowIndex;
    let select = document.getElementsByClassName('selectTotal').length;
    let m = document.getElementsByClassName('editar');
    let mar = document.getElementsByClassName('editar').length;
    let cellCount = document.getElementsByTagName('tr')[1].cells.length;
    let mct = document.getElementsByClassName('campoId').length;
              for(ia = 0; ia < val; ia++){
                for(ib = 0; ib < cellCount; ib++){
                  if(document.getElementsByTagName('tr')[val].cells[ib].lastElementChild == null){
                    continue
                  } else if(document.getElementsByTagName('tr')[val].cells[ib].lastElementChild.style.display == 'block'){
                    valTrt = val - 1
                    document.getElementsByClassName('prioridadeCampo')[valTrt].innerText = document.getElementsByClassName('campoId')[valTrt].value
                    document.getElementsByClassName('descri-tabela')[valTrt].innerText = document.getElementsByClassName('setorSelect')[valTrt].value
                    document.getElementsByClassName('areaCampo')[valTrt].innerText = document.getElementsByClassName('areaSelect')[valTrt].value
                    document.getElementsByClassName('tipoCampo')[valTrt].innerText = document.getElementsByClassName('tipoSelect')[valTrt].value
                    document.getElementsByClassName('urgenciaCampo')[valTrt].innerText = document.getElementsByClassName('urgenciaSelect')[valTrt].value
                    document.getElementsByClassName('designadoCampo')[valTrt].innerText = document.getElementsByClassName('designadoSelect')[valTrt].value
                    document.getElementsByTagName('tr')[val].cells[ib].lastElementChild.style.display = 'none'
                  }
                }
              }
  })
}
