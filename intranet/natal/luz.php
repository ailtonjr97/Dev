<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Intranet Fibracem</title>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <script> window.onload = diminui_zoom;    function diminui_zoom(){document.body.style.zoom = "75%";} </script>

    <script type="text/javascript">

        $(window).on("load",function(){
             $("#loader").fadeOut("slow");
              window.setInterval(pesquisa_novo_req_aprov, 9999);
         });

     function pesquisa_novo_req_aprov(){

  $('#pesquisa_novo_req_aprov').html("");

    $.get("/api/chamados/pendencia/aprovacao/{{auth()->user()->id}}" , function(produto){
        for(u=0;u<produto.length;u++){


    html= "<a  class='alert alert-success' href='{{ route('chamados.aprovacao') }}' data-toggle='tooltip' data-placement='right' title='Você tem "+produto[u]+" solicitações para aprovar!'> Você tem "+produto[u]+" solicitações para aprovar!</a> "+
    "&nbsp;&nbsp;&nbsp;";


if(produto[u] > 0){  $('#pesquisa_novo_req_aprov').html(html); };

         }

    });

 }


function Imprimi(){

    $('#menu').hide();
    $('#imprimir').hide();
    $('#link1').hide();
    window.print()
    $('#menu').show();
    $('#imprimir').show();
    $('#link1').show();

   }


    </script>

</head>

<body>


<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>

<div class="modal" id="loader"  tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">

        <center>
           <div class="loader"></div>
        </center>

</div>

<img src="public/images/fibracem.png" alt="">
    <nav class="navbar navbar-dark bg-dark" >
      <img src="luz.png" alt="">
      <h1>teste</h1>
        <div class="container-fluid" >
          <h1>teste</h1>
            <div class="navbar-header">
                <button type="button" class="navbar-toggler pull-left" data-toggle="collapse" data-target="#myNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="{{route('home')}}">Ailton</a>
            </div>
            <ul class="navbar-nav">




<div class='row'>

    <div id='pesquisa_novo_req_aprov'></div>

    <a href="javascript:history.back()" data-toggle="tooltip" data-placement="right" title="Voltar uma pagina." >
        <img src=" {{url('storage/images/anterior.png')}} ">
    </a> &nbsp;&nbsp;&nbsp;

    <a href="javascript: history.go(1)"  data-toggle="tooltip" data-placement="right" title="Avançar uma pagina.">
     <img src=" {{url('storage/images/proximo.png')}} ">
    </a> &nbsp;&nbsp;&nbsp;

    <a id='imprimir'  onClick="Imprimi()"   data-toggle="tooltip" data-placement="right" title="Imprimir a página atual." >
        <img src=" {{url('storage/images/impressora.png')}} ">
    </a> &nbsp;&nbsp;&nbsp;


    <a  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-placement="right" title="Mais">
           <img src=" {{url('storage/images/mais.png')}} ">
    </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                <a class=" dropdown-item " href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                    {{ __('Sair') }}
                </a>
               <div class="dropdown-divider"></div>

                <a class="  dropdown-item"  href="{{ route('registerAlter') }}" >
                    {{ __('Alterar Senha') }}
                </a>
        </div>



                </div>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </ul>
        </div>
    </nav>
    <div class="main" >
        <div id="menu" class="menu-open" >
            <ul class="list-unstyled components">



                  <li>
                    <a href="#LogisticaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                         Logística
                    </a>
                    <ul class="collapse list-unstyled" id="LogisticaSubmenu">
                        <li>

                            <a href="{{ route('inventario.edit') }}">Inventário Cego</a>
                            <a href="{{ route('inventario.recontagem',5) }}">Inventário Recontagem</a>
                            <a href="{{ route('inventario.recontagemHistorico') }}">Histórico Recontagem</a>

                        </li>
                    </ul>
                </li>

                @can('viewReports', Intranet\User::class)

                @endcan

                <li>
                    <a href="#chamadosSubmenuRamais" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                        Informacional
                    </a>
                    <ul class="collapse list-unstyled" id="chamadosSubmenuRamais">
                        <li>

                            <a href=" {{route('branches')}}">Ramais</a>

                        </li>
                    </ul>
                </li>


                @can('viewIssues', Intranet\User::class)
                <li>
                    <a href="#reportsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                        Relatórios
                    </a>
                    <ul class="collapse list-unstyled" id="reportsSubmenu">
                        <li>
                           <!-- <a href="{{ route('order.index') }}">Pedidos em Aberto</a> --->
                            <a href="{{ route('indicadorChamado.designado') }}">Chamados Fechados</a>
                            <a href="{{ route('indicadorChamado.designado_status') }}">Carga Atual</a>
                            <a href="{{ route('indicadorChamado.designado_area') }}">Analista X Categoria</a>
                        </li>
                    </ul>
                </li>
                @endcan

                @can('isAdmin', Intranet\User::class)
                <li>
                    <a href="#usersSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                        Usuários
                    </a>
                    <ul class="collapse list-unstyled" id="usersSubmenu">
                        <li>
                            <a href="{{ route('register') }}">Novo Usuário</a>
                        </li>
                        <li>
                            <a href="{{ route('users.index') }}">Usuários Ativos</a>
                        </li>
                        <li>
                            <a href="{{ route('users.inactives')}}">Usuários Inativos</a>
                        </li>
                        <li>
                            <a href="{{ route('departments.index') }}">Setores</a>
                        </li>
                    </ul>
                </li>
                @endcan



         <!--
                <li>
                    <a href="#financeiroSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                        Financeiro
                    </a>

                            <ul class="collapse list-unstyled" id="financeiroSubmenu">
                                <li>
                                    <a href="{{ route('hotel_request.index') }}">Viagens</a>
                                </li>
                            </ul>
                            @can('viewFinanceiro', Intranet\User::class)
                            <ul class="collapse list-unstyled" id="financeiroSubmenu">
                                <li>
                                    <a href="{{ route('cadastrar_cotacao.compra') }}">Viagens Aprovadas</a>
                                </li>
                            </ul>
                            <ul class="collapse list-unstyled" id="financeiroSubmenu">
                                <li>
                                    <a href="{{ route('duplicatas_pagar.index') }}">Duplicatas a Pagar</a>
                                </li>
                            </ul>

                            <ul class="collapse list-unstyled" id="financeiroSubmenu">
                                <li>
                                    <a href="{{ route('duplicatas_pagar.cadastro_condic_pagamento') }}">Cadastro Condição</a>
                                </li>
                            </ul>

                            @endcan


                </li>

         -->





                <li>
                    <a href="#qualidadeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                       Qualidade
                    </a>

                           <ul class="collapse list-unstyled" id="qualidadeSubmenu">



                                <li>
                                  <a href="{{ route('chamados.create_setor',5) }}">Abrir Solicitação</a>
                                </li>

                                <li>
                                  <a href="{{ route('chamados.indexSetores',5) }}">Minhas Solicitações</a>
                                </li>

                                <li>
                                  <a href="{{ route('respostaCPNC.dashboard') }}">CPNCs Painel</a>
                                </li>

                                <li>
                                  <a href="{{ route('respostaCPNC.setor_cpnc') }}">CPNCs Pendentes</a>
                                </li>

                                <li>
                                  <a href="{{ route('respostaCPNC.setor_cpnc_respondidas') }}">CPNCs Respondidas</a>
                                </li>

                                @can('viewQualidade', Intranet\User::class)
                                <li>
                                  <a href="{{ route('chamados.edit_setor',[5]) }}">Solicitações Abertas</a>
                                </li>

                                <li>
                                  <a href="{{ route('chamados.gestor',5) }}">Gerir Solicitações</a>
                                </li>

                                <li>
                                  <a href="{{ route('chamados.todos',[5,0,50,1,0]) }}">Finalizados</a>
                                </li>
                               @endcan

                               @can('viewQualidade_Configuracoes', Intranet\User::class)

                                <li>
                                  <a href="{{ route('setores.index') }}">Configurar Setores</a>
                                </li>

                                <li>
                                  <a href="{{ route('motivosCPNC.index') }}">Configurar Motivos CPNC</a>
                                </li>

                               @endcan

                               @can('viewQualidade', Intranet\User::class)
                                <li>
                                    <a href="{{ route('qualidade_imagens_index') }}">Registrar Imagens</a>
                                </li>

                                <li>
                                    <a href="{{ route('fotosCPNC.index') }}">Registrar Imagens CPNC</a>
                                </li>
                               @endcan

                            </ul>
<!--
                            <ul class="collapse list-unstyled" id="qualidadeSubmenu">
                                <li>
                                     <a href="{{ route('reservas.modalidades',4) }}">Solicitação serviços <br>ao laboratório</a>
                                </li>
                            </ul>

/-->
                </li>



           @can('viewMkt', Intranet\User::class)
                <li>
                    <a href="#mktSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                       Marketing
                    </a>

                           <ul class="collapse list-unstyled" id="mktSubmenu">
                                <li>
                                     <a href="/Marketing/EnvioPesquisa/relatorio/pedido/mes/{{date('m')}}/{{date('Y')}}">Envios Pesquisa por Mês</a>
                                </li>
                            </ul>

                              <ul class="collapse list-unstyled" id="mktSubmenu">
                                <li>
                                   <a href="{{ route('pesquisa.relatorio_fase') }}"> Envios Pesquisa por Pedido</a>
                                </li>
                            </ul>


                </li>
            @endcan



                 <li>
                    <a href="#documentoSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                       Documentos
                    </a>

                            <ul class="collapse list-unstyled" id="documentoSubmenu">
                                <li>
                                    <a href="{{ route('documentos.index') }}">Gerar Documentos</a>
                                </li>
                            </ul>


                            <ul class="collapse list-unstyled" id="documentoSubmenu">
                                <li>
                                    <a href="{{ route('documento.painel') }}">Para Aprovação</a>
                                </li>
                            </ul>

                            <ul class="collapse list-unstyled" id="documentoSubmenu">
                                <li>
                                    <a href="{{ route('documento.painel_emissor') }}">Minhas Emissões </a>
                                </li>
                            </ul>


                            <ul class="collapse list-unstyled" id="documentoSubmenu">
                                <li>
                                    <a href="{{ route('documento.painel_gerencial') }}">Emissões do Setor</a>
                                </li>
                            </ul>


                            <ul class="collapse list-unstyled" id="documentoSubmenu">
                                <li>
                                    <a href="{{ route('documento.alterar_roteiro') }}">Alterar Roteiro</a>
                                </li>
                            </ul>

                </li>
                <li>
                    <a href="#SEGTRABSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                        Segurança do Trabalho
                    </a>
                    <ul class="collapse list-unstyled" id="SEGTRABSubmenu">
                        <li>

                            <a href="{{ route('chamados.indexSetores',7) }}">Solicitações</a>
                            <a href="{{ route('chamados.create_setor',7) }}">Solicitar</a>


                            @can('viewChamados_Seg_trab', Intranet\User::class)

                            <a href="{{ route('chamados.edit_setor',[7]) }}">Solicitações Abertas</a>
                            <a href="{{ route('chamados.todos',[7,0,50,1,0]) }}">Finalizados</a>
                            <a href="{{ route('chamados.gestor',7) }}">Gerir Solicitações</a>
                            @endcan

                        </li>
                    </ul>
                </li>


                 <li>
                    <a href="#RHSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                       Recursos Humanos
                    </a>


                       <ul class="collapse list-unstyled" id="RHSubmenu">
                            <li>
                                    <a href="{{ route('chamados.create_setor',4) }}">Solicitar</a>
                            </li>
                       </ul>

                        <ul class="collapse list-unstyled" id="RHSubmenu">
                            <li>
                                  <a href="{{ route('chamados.indexSetores',4) }}">Minhas Solicitações</a>
                            </li>
                       </ul>

@can('viewRHsolicits', Intranet\User::class)

                        <ul class="collapse list-unstyled" id="RHSubmenu">
                                <li>
                                    <a href="{{ route('chamados.edit_setor',[4]) }}">Solicitações</a>
                                <!--    <a href="{{ route('chamados_R_H.edit') }}">Solicitações</a>  -->
                                    <a href="{{ route('chamados.todos',[4,0,50,1,0]) }}">Arquivados</a>
                                    <a href="{{ route('chamados.terceiros',[4]) }}">Em Terceiros</a>
     @can('viewRHsolicitsGestor', Intranet\User::class)
                                    <a href="{{ route('chamados.gestor',4) }}">Gerir Solicitações</a>
                                    <a href="{{ route('lgpd.index') }}">Criar Documento - LGPD</a>
                                    <a href="{{ route('lgpd.showlista') }}">Visualizar Criados - LGPD</a>

     @endcan
                                </li>
                       </ul>
@endcan

                </li>
                 <li>
                    <a href="#LGPDSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                       LGPD
                    </a>

@can('viewRHsolicits', Intranet\User::class)

                        <ul class="collapse list-unstyled" id="LGPDSubmenu">
                                <li>
     @can('viewRHsolicitsGestor', Intranet\User::class)
                                    <a href="{{ route('lgpd.index') }}">Criar Documento - LGPD</a>
                                    <a href="{{ route('lgpd.showlista') }}">Visualizar Criados - LGPD</a>

     @endcan
                                </li>
                       </ul>
@endcan
                </li>









                <li>
                    <a href="#chamadosSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                        Tecnologia da Informação
                    </a>
                    <ul class="collapse list-unstyled" id="chamadosSubmenu">
                        <li>

                            <a href="{{ route('chamados.indexSetores',1) }}">Meus Chamados</a>
                            <a href="{{ route('chamados.create_setor',1) }}">Abrir Chamado</a>
                            <a href="{{ route('chamados.AprovacaoGestor') }}">Aprovar Desenvolvimentos</a>


                            @can('isAdmin', Intranet\User::class)

                            <a href="{{ route('chamados.edit_setor',[1]) }}">Gerenciar Chamados</a>
                            <a href="{{ route('chamados.terceiros',[1]) }}">Em Terceiros</a>
                            <a href="{{ route('chamados.todos',[1,0,50,1,0]) }}">Finalizados</a>
                            <a href="{{ route('operacoes.index') }}">Operações</a>
                            <a href="{{ route('operacoes.create') }}">Nova Operações</a>
                            <a href="{{ route('instrucao.create') }}">Cadastrar instrução</a>
                            <a href="{{ route('instrucao.index') }}">Instruções</a>
                            <a href="{{ route('componente.movimentacao_saldo',[1]) }}">Movimentações de <br>Componentes</a>
                            <a href="{{ route('chamado.desenv') }}">Chamados  <br>Desenvolvimento</a>
                            <a href="{{ route('chamados.edit_recorrente',[1]) }}">Chamados  <br>Recorrentes</a>

                            @endcan

                        </li>
                    </ul>
                </li>



                 <li>
                    <a href="#ManutPredSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                       Manutenção Predial
                    </a>

                       <ul class="collapse list-unstyled" id="ManutPredSubmenu">
                                <li>
                                    <a href="{{ route('chamados.create_setor',2) }}">Solicitar</a>
                                </li>
                       </ul>

                        <ul class="collapse list-unstyled" id="ManutPredSubmenu">
                                <li>
                                    <a href="{{ route('chamados.indexSetores',2) }}">Minhas Solicitações</a>
                                    <a href="{{ route('chamados.AprovacaoGestor') }}">Solicitações para Aprovar</a>
                                </li>
                       </ul>
      @can('viewManutPredial', Intranet\User::class)
                        <ul class="collapse list-unstyled" id="ManutPredSubmenu">
                                <li>
                                    <a href="{{ route('chamados.edit_setor',[2]) }}">Solicitações</a>
                               <!-- <a href="{{ route('chamados_manut_predial.edit') }}">Solicitações</a>   -->
                                    <a href="{{ route('chamados.todos',[2,0,50,1,0]) }}">Finalizados</a>
                                    <a href="{{ route('chamados.terceiros',[2]) }}">Em Terceiros</a>
                                    <a href="{{ route('componente.movimentacao',[2]) }}">Movimentações de <br>Componentes</a>

                                   <a href="{{ route('chamados.gestor',2) }}">Gerir Solicitações</a>


                                </li>
                       </ul>
      @endcan
                </li>


                <li>
                    <a href="#ManutIndSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                       Manutenção Industrial
                    </a>

                       <ul class="collapse list-unstyled" id="ManutIndSubmenu">
                                <li>
                                    <a href="{{ route('chamados.create_setor',3) }}">Solicitar</a>
                                </li>
                       </ul>

                        <ul class="collapse list-unstyled" id="ManutIndSubmenu">
                                <li>
                                    <a href="{{ route('chamados.indexSetores',3) }}">Minhas Solicitações</a>
                                </li>
                       </ul>
                    @can('viewManutIndustrial', Intranet\User::class)
                        <ul class="collapse list-unstyled" id="ManutIndSubmenu">
                                <li>
                                    <a href="{{ route('chamados.edit_setor',[3]) }}">Solicitações</a>
                                <!--    <a href="{{ route('chamados_manut_ind.edit') }}">Solicitações</a> -->
                                    <a href="{{ route('chamados.todos',[3,0,50,1,0]) }}">Finalizados</a>
                                    <a href="{{ route('chamados.terceiros',[3]) }}">Terceiros</a>
                                    <a href="{{ route('componente.movimentacao',[3]) }}">Movimentações de <br>Componentes</a>

@can('viewManutIndustrialGestor', Intranet\User::class)
                                   <a href="{{ route('chamados.gestor',3) }}">Gerir Solicitações</a>
@endcan
                                </li>
                       </ul>
                    @endcan


                </li>


                <li>
                    <a href="#finanSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                        Financeiro
                    </a>
                    <ul class="collapse list-unstyled" id="finanSubmenu">


                    <a href="#viagemSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                        Viagens
                    </a>
                          <ul class="collapse list-unstyled" id="viagemSubmenu">

                            <li>
                               <a href="{{ route('hotel_request.create') }}"> - Solicitar Nova Viagem</a>
                            </li>

                            <li>
                               <a href="{{ route('hotel_request.minha_solicitacao') }}"> - Minhas Solicitações</a>
                            </li>

                            <li>
                               <a href="{{ route('hotel_request.aprovar_solicitacao') }}"> - Aprovar Solicitações</a>
                            </li>

                          </ul>
   @can('viewFinanceiro', Intranet\User::class)

                    <a href="#viagemGestorSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                        Gestor Viagens
                    </a>
                          <ul class="collapse list-unstyled" id="viagemGestorSubmenu">

                            <li>
                               <a href="{{ route('hotel_request.solicitacao_aberta') }}"> - Viagens Abertas</a>
                            </li>

                            <li>
                               <a href="{{ route('hotel_request.aprovada_solicitacao') }}"> - Viagens Aprovadas</a>
                            </li>

                            <li>
                               <a href="{{ route('hotel_request.solicitacao_comprada') }}"> - Viagens Compradas</a>
                            </li>

                          </ul>

                    <a href="#ContasSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                        Contas
                     </a>
                          <ul class="collapse list-unstyled" id="ContasSubmenu">

                            <li>
                                <a href="{{ route('duplicatas_pagar.index') }}"> - Duplicatas a Pagar</a>
                            </li>

                          </ul>

                     <a href="#CadastrosfinSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                        Cadastros
                     </a>
                          <ul class="collapse list-unstyled" id="CadastrosfinSubmenu">

                             <li>
                                <a href="{{ route('duplicatas_pagar.cadastro_condic_pagamento') }}"> - Cadastro Condição</a>
                             </li>

                             <li>
                                <a href="{{ route('hotel_request.cadastro_forneced') }}"> - Cadastro Fornecedores</a>
                             </li>

                             <li>
                                <a href="{{ route('hotel_request.cadastro_services') }}"> - Cadastro Serviços</a>
                             </li>

                          </ul>
                   @endcan
                    </ul>

                </li>

               <li>
                    <a href="#ReservaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                       Reservas
                    </a>

                           <ul class="collapse list-unstyled" id="ReservaSubmenu">
                                <li>
                                     <a href="{{ route('reservas.modalidades',1) }}">Sala de Reunião</a>
                                </li>
                            </ul>

                            <ul class="collapse list-unstyled" id="ReservaSubmenu">
                                <li>
                                   <a href="{{ route('reservas.modalidades',2) }}"> Veículos</a>
                                </li>
                            </ul>
                            <ul class="collapse list-unstyled" id="ReservaSubmenu">
                                <li>
                                   <a href="{{ route('reservas.modalidades',4) }}"> Laboratório da Qualidade</a>
                                </li>
                            </ul>


                </li>


                               <li>
                    <a href="#PortariaFiscalSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                       Portaria Fiscal
                    </a>

                           <ul class="collapse list-unstyled" id="PortariaFiscalSubmenu">
                                <li>
                                     <a href="{{ route('reservas.modalidades',3) }}">Agendar Recebimento</a>
                                </li>
                            </ul>


                </li>






                <li>
                    <a href="#wfs" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                        WorkFlow
                    </a>
                    <ul class="collapse list-unstyled" id="wfs">
                        <li>

                         <!--   <a href="{{ route('chamados.index') }}">Solici</a>
                            <a href="{{ route('chamados.create_setor',1) }}">Abrir Chamado</a>
                            <a href="{{ route('chamados.AprovacaoGestor') }}">Aprovar Desenvolvimentos</a>
                         -->

                            @can('viewResponderWF', Intranet\User::class)
                            <a href="{{ route('wf.index') }}">Aprovar solicitações</a>
                            @endcan

                            <a href="{{ route('wf.pesquisaSolicitacao') }}">Solicitações</a>

                             @can('isAdmin', Intranet\User::class)
                               <a href="{{ route('wf.gerencia') }}">Configurações</a>
                               <a href="{{ route('p.home') }}">Parametros</a>
                            @endcan

                        </li>
                    </ul>
                </li>
@can('viewRelatoriosWF', Intranet\User::class)

                <li>
                    <a href="#relatorio_korp" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                        Relatórios
                    </a>
                    <ul class="collapse list-unstyled" id="relatorio_korp">
                        <li>


                            <a href="{{ route('relat.index') }}">Relatório de Produto</a>


                        </li>
                    </ul>
                </li>

  @endcan


                <li>
                    <a href="#ControladoriaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                        Controladoria
                    </a>
                    <ul class="collapse list-unstyled" id="ControladoriaSubmenu">
                        <li>

                            <a href="{{ route('chamados.indexSetores',6) }}">Solicitações</a>
                            <a href="{{ route('chamados.create_setor',6) }}">Solicitar</a>


                            @can('viewChamadosControladoria', Intranet\User::class)

                            <a href="{{ route('chamados.edit_setor',[6]) }}">Solicitações Abertas</a>
                            <a href="{{ route('chamados.todos',[6,0,50,1,0]) }}">Finalizados</a>

                            @endcan

                             <a href="{{ route('chamado.todos_itens_inclusos') }}">Produtos Ajustados</a>

                        </li>
                    </ul>
                </li>

                 <li>
                    <a href="#ProcessosSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                        Processos
                    </a>
                    <ul class="collapse list-unstyled" id="ProcessosSubmenu">
                        <li>

                            <a href="{{ route('chamados.indexSetores',8) }}">Solicitações</a>
                            <a href="{{ route('chamados.create_setor',8) }}">Solicitar</a>


                            @can('viewChamadosProcessos', Intranet\User::class)

                            <a href="{{ route('chamados.edit_setor',[8]) }}">Solicitações Abertas</a>
                            <a href="{{ route('chamados.todos',[8,0,50,1,0]) }}">Finalizados</a>
                            <a href="{{ route('chamados.gestor',8) }}">Gerenciar</a>

                            @endcan

                        </li>
                    </ul>
                </li>




                 <li>
                    <a href="#EngenhariaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                         Engenharia
                    </a>
                    <ul class="collapse list-unstyled" id="EngenhariaSubmenu">
                        <li>

                            <a href="{{ route('chamados.indexSetores',9) }}">Solicitações</a>
                            <a href="{{ route('chamados.create_setor',9) }}">Solicitar</a>


                            @can('viewChamadosProcessos', Intranet\User::class)

                            <a href="{{ route('chamados.edit_setor',[9]) }}">Solicitações Abertas</a>
                            <a href="{{ route('chamados.todos',[9,0,50,1,0]) }}">Finalizados</a>
                            <a href="{{ route('chamados.gestor',9) }}">Gerenciar</a>

                            @endcan

                        </li>
                    </ul>
                </li>


                 <li>
                    <a href="#PCPSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-angle-down"></i>
                         PCP
                    </a>
                    <ul class="collapse list-unstyled" id="PCPSubmenu">
                        <li>

                            <a href="{{ route('pcp.ListasSeparacao') }}">Listas</a>

                        </li>
                    </ul>
                </li>


 <li> <a href="#" data-toggle="collapse" aria-expanded="false" ><i class="fas fa-angle-down"></i><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br></a><ul class="collapse list-unstyled" id="qualidadeSubmenu"><li><a href="#"></a></li></ul> </li>
 <li> <a href="#" data-toggle="collapse" aria-expanded="false" ><i class="fas fa-angle-down"></i><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br></a><ul class="collapse list-unstyled" id="qualidadeSubmenu"><li><a href="#"></a></li></ul> </li



            </ul>
        </div>
        <div class="content">

                @yield('content')

        </div>
    </div>
</body>
