const express = require('express')
const app = express();
const path = require('path')

app.use('/public', express.static('public'))

app.get('/', function(req, res){
  res.sendFile(__dirname + '/paginainicial.html')
})

app.get('/loginpage.html', function(req, res){
  res.sendFile(__dirname + '/loginpage.html')
})

app.get('/dashboard.html', function(req, res){
  res.sendFile(__dirname + '/dashboard.html')
})

///////////////////////////////////////////////////////////////////
//Informacional

app.get('/ramais.html', function(req, res){
  res.sendFile(__dirname + '/ramais.html')
})

///////////////////////////////////////////////////////////////////
//Relatórios

app.get('/relatorioschamadosfechados.html', function(req, res){
  res.sendFile(__dirname + '/relatorioschamadosfechados.html')
})

app.get('/relatorioscargaatual.html', function(req, res){
  res.sendFile(__dirname + '/relatorioscargaatual.html')
})

app.get('/relatoriosanalistaxcategoria.html', function(req, res){
  res.sendFile(__dirname + '/relatoriosanalistaxcategoria.html')
})

///////////////////////////////////////////////////////////////////
//Usuários

app.get('/usuariosnovousuario.html', function(req, res){
  res.sendFile(__dirname + '/usuariosnovousuario.html')
})

app.get('/usuariosusuariosativos.html', function(req, res){
  res.sendFile(__dirname + '/usuariosusuariosativos.html')
})

app.get('/usuariosusuariosinativos.html', function(req, res){
  res.sendFile(__dirname + '/usuariosusuariosinativos.html')
})

app.get('/usuariossetores.html', function(req, res){
  res.sendFile(__dirname + '/usuariossetores.html')
})

///////////////////////////////////////////////////////////////////
//Qualidade

app.get('/qualidaderegistrarimagens.html', function(req, res){
  res.sendFile(__dirname + '/qualidaderegistrarimagens.html')
})

app.get('/qualidadefotoscpnc.html', function(req, res){
  res.sendFile(__dirname + '/qualidadefotoscpnc.html')
})

app.get('/qualidadeabrirsolicitacao.html', function(req, res){
  res.sendFile(__dirname + '/qualidadeabrirsolicitacao.html')
})

app.get('/qualidademinhassolicitacoes.html', function(req, res){
  res.sendFile(__dirname + '/qualidademinhassolicitacoes.html')
})

app.get('/qualidademinhastarefas.html', function(req, res){
  res.sendFile(__dirname + '/qualidademinhastarefas.html')
})

app.get('/qualidadegerirsolicitacoes.html', function(req, res){
  res.sendFile(__dirname + '/qualidadegerirsolicitacoes.html')
})

app.get('/qualidadefinalizados.html', function(req, res){
  res.sendFile(__dirname + '/qualidadefinalizados.html')
})

app.get('/qualidadeconfigurarsetores.html', function(req, res){
  res.sendFile(__dirname + '/qualidadeconfigurarsetores.html')
})

app.get('/qualidadecadastrarmotivoscpnc.html', function(req, res){
  res.sendFile(__dirname + '/qualidadecadastrarmotivoscpnc.html')
})

///////////////////////////////////////////////////////////////////
//Marketing

app.get('/marketingenviospesquisapormes.html', function(req, res){
  res.sendFile(__dirname + '/marketingenviospesquisapormes.html')
})

app.get('/marketingenviospesquisaporpedido.html', function(req, res){
  res.sendFile(__dirname + '/marketingenviospesquisaporpedido.html')
})

///////////////////////////////////////////////////////////////////
//Documentos

app.get('/documentosgerardocumentos.html', function(req, res){
  res.sendFile(__dirname + '/documentosgerardocumentos.html')
})

app.get('/documentosparaaprovacao.html', function(req, res){
  res.sendFile(__dirname + '/documentosparaaprovacao.html')
})

app.get('/documentosminhasemissoes.html', function(req, res){
  res.sendFile(__dirname + '/documentosminhasemissoes.html')
})

app.get('/documentosemissoesdosetor.html', function(req, res){
  res.sendFile(__dirname + '/documentosemissoesdosetor.html')
})

app.get('/documentosalterarroteiro.html', function(req, res){
  res.sendFile(__dirname + '/documentosalterarroteiro.html')
})

///////////////////////////////////////////////////////////////////
//Segurança do Trabalho

app.get('/segurancasolicitacoes.html', function(req, res){
  res.sendFile(__dirname + '/segurancasolicitacoes.html')
})

app.get('/segurancasolicitar.html', function(req, res){
  res.sendFile(__dirname + '/segurancasolicitar.html')
})

app.get('/segurancasolicitacoesabertas.html', function(req, res){
  res.sendFile(__dirname + '/segurancasolicitacoesabertas.html')
})

app.get('/segurancafinalizados.html', function(req, res){
  res.sendFile(__dirname + '/segurancafinalizados.html')
})

app.get('/segurancagerirsolicitacoes.html', function(req, res){
  res.sendFile(__dirname + '/segurancagerirsolicitacoes.html')
})

///////////////////////////////////////////////////////////////////
//Recursos Humanos

app.get('/rhsolicitar.html', function(req, res){
  res.sendFile(__dirname + '/rhsolicitar.html')
})

app.get('/rhminhassolicitacoes.html', function(req, res){
  res.sendFile(__dirname + '/rhminhassolicitacoes.html')
})

app.get('/rhsolicitacoes.html', function(req, res){
  res.sendFile(__dirname + '/rhsolicitacoes.html')
})

app.get('/rharquivados.html', function(req, res){
  res.sendFile(__dirname + '/rharquivados.html')
})

app.get('/rhemterceiros.html', function(req, res){
  res.sendFile(__dirname + '/rhemterceiros.html')
})

app.get('/rhgerirsolicitacoes.html', function(req, res){
  res.sendFile(__dirname + '/rhgerirsolicitacoes.html')
})

app.get('/rhcriardocumentoslgpd.html', function(req, res){
  res.sendFile(__dirname + '/rhcriardocumentoslgpd.html')
})

app.get('/rhvisualizarcriadoslgpd.html', function(req, res){
  res.sendFile(__dirname + '/rhvisualizarcriadoslgpd.html')
})

///////////////////////////////////////////////////////////////////
//LGPD

app.get('/lgpdcriardocumentoslgpd.html', function(req, res){
  res.sendFile(__dirname + '/lgpdcriardocumentoslgpd.html')
})

app.get('/lgpdvisualizarcriadoslgpd.html', function(req, res){
  res.sendFile(__dirname + '/lgpdvisualizarcriadoslgpd.html')
})

///////////////////////////////////////////////////////////////////
//Tecnologia da Informação

app.get('/timeuschamados.html', function(req, res){
  res.sendFile(__dirname + '/timeuschamados.html')
})

app.get('/tiabrirchamado.html', function(req, res){
  res.sendFile(__dirname + '/tiabrirchamado.html')
})

app.get('/tiaprovardesenvolvimento.html', function(req, res){
  res.sendFile(__dirname + '/tiaprovardesenvolvimento.html')
})

app.get('/tigerenciarchamados.html', function(req, res){
  res.sendFile(__dirname + '/tigerenciarchamados.html')
})

app.get('/tiemterceiros.html', function(req, res){
  res.sendFile(__dirname + '/tiemterceiros.html')
})

app.get('/tifinalizados.html', function(req, res){
  res.sendFile(__dirname + '/tifinalizados.html')
})

app.get('/tioperacoes.html', function(req, res){
  res.sendFile(__dirname + '/tioperacoes.html')
})

app.get('/tinovaoperacao.html', function(req, res){
  res.sendFile(__dirname + '/tinovaoperacao.html')
})

app.get('/tiinstrucoes.html', function(req, res){
  res.sendFile(__dirname + '/tiinstrucoes.html')
})

app.get('/ticadastrarinstrucao.html', function(req, res){
  res.sendFile(__dirname + '/ticadastrarinstrucao.html')
})

app.get('/timovimentacoesdecomponentes.html', function(req, res){
  res.sendFile(__dirname + '/timovimentacoesdecomponentes.html')
})

app.get('/tichamadosdesenvolvimento.html', function(req, res){
  res.sendFile(__dirname + '/tichamadosdesenvolvimento.html')
})

app.get('/tichamadosrecorrentes.html', function(req, res){
  res.sendFile(__dirname + '/tichamadosrecorrentes.html')
})

///////////////////////////////////////////////////////////////////
//Manutenção Predial

app.get('/manutpredsolicitar.html', function(req, res){
  res.sendFile(__dirname + '/manutpredsolicitar.html')
})

app.get('/manutpredminhassolicitacoes.html', function(req, res){
  res.sendFile(__dirname + '/manutpredminhassolicitacoes.html')
})

app.get('/manutpredsolicitacoesparaaprovar.html', function(req, res){
  res.sendFile(__dirname + '/manutpredsolicitacoesparaaprovar.html')
})

app.get('/manutpredsolicitacoes.html', function(req, res){
  res.sendFile(__dirname + '/manutpredsolicitacoes.html')
})

app.get('/manutpredfinalizados.html', function(req, res){
  res.sendFile(__dirname + '/manutpredfinalizados.html')
})

app.get('/manutpredemterceiros.html', function(req, res){
  res.sendFile(__dirname + '/manutpredemterceiros.html')
})

app.get('/manutpredmovimentacoesdecomponentes.html', function(req, res){
  res.sendFile(__dirname + '/manutpredmovimentacoesdecomponentes.html')
})

app.get('/manutpredgerirsolicitacoes.html', function(req, res){
  res.sendFile(__dirname + '/manutpredgerirsolicitacoes.html')
})

///////////////////////////////////////////////////////////////////
//Manutenção Industrial

app.get('/manutindsolicitar.html', function(req, res){
  res.sendFile(__dirname + '/manutindsolicitar.html')
})

app.get('/manutindminhassolicitacoes.html', function(req, res){
  res.sendFile(__dirname + '/manutindminhassolicitacoes.html')
})

app.get('/manutindsolicitacoes.html', function(req, res){
  res.sendFile(__dirname + '/manutindsolicitacoes.html')
})

app.get('/manutindfinalizados.html', function(req, res){
  res.sendFile(__dirname + '/manutindfinalizados.html')
})

app.get('/manutindterceiros.html', function(req, res){
  res.sendFile(__dirname + '/manutindterceiros.html')
})

app.get('/manutindmovimentacoesdecomponentes.html', function(req, res){
  res.sendFile(__dirname + '/manutindmovimentacoesdecomponentes.html')
})

app.get('/manutindgerirsolicitacoes.html', function(req, res){
  res.sendFile(__dirname + '/manutindgerirsolicitacoes.html')
})

///////////////////////////////////////////////////////////////////
//Financeiro

app.get('/financeiroviagens.html', function(req, res){
  res.sendFile(__dirname + '/financeiroviagens.html')
})

app.get('/financeirogestorviagens.html', function(req, res){
  res.sendFile(__dirname + '/financeirogestorviagens.html')
})

app.get('/financeirocontas.html', function(req, res){
  res.sendFile(__dirname + '/financeirocontas.html')
})

app.get('/financeirocadastros.html', function(req, res){
  res.sendFile(__dirname + '/financeirocadastros.html')
})

///////////////////////////////////////////////////////////////////
//Reservas

app.get('/reservassaladereuniao.html', function(req, res){
  res.sendFile(__dirname + '/reservassaladereuniao.html')
})

app.get('/reservasveiculos.html', function(req, res){
  res.sendFile(__dirname + '/reservasveiculos.html')
})

///////////////////////////////////////////////////////////////////
//Portaria Fiscal

app.get('/agendarrecebimento.html', function(req, res){
  res.sendFile(__dirname + '/agendarrecebimento.html')
})

///////////////////////////////////////////////////////////////////
//Workflow

app.get('/workflowaprovarsolicitacoes.html', function(req, res){
  res.sendFile(__dirname + '/workflowaprovarsolicitacoes.html')
})

app.get('/workflowsolicitacoes.html', function(req, res){
  res.sendFile(__dirname + '/workflowsolicitacoes.html')
})

app.get('/workflowconfiguracoes.html', function(req, res){
  res.sendFile(__dirname + '/workflowconfiguracoes.html')
})

app.get('/workflowparametros.html', function(req, res){
  res.sendFile(__dirname + '/workflowparametros.html')
})

///////////////////////////////////////////////////////////////////
//Relatórios

app.get('/relatorios2relatoriodeproduto.html', function(req, res){
  res.sendFile(__dirname + '/relatorios2relatoriodeproduto.html')
})

///////////////////////////////////////////////////////////////////
//Controladoria

app.get('/controladoriasolicitacoes.html', function(req, res){
  res.sendFile(__dirname + '/controladoriasolicitacoes.html')
})

app.get('/controladoriasolicitar.html', function(req, res){
  res.sendFile(__dirname + '/controladoriasolicitar.html')
})

app.get('/controladoriasolicitacoesabertas.html', function(req, res){
  res.sendFile(__dirname + '/controladoriasolicitacoesabertas.html')
})

app.get('/controladoriafinalizados.html', function(req, res){
  res.sendFile(__dirname + '/controladoriafinalizados.html')
})

app.get('/controladoriaprodutosajustados.html', function(req, res){
  res.sendFile(__dirname + '/controladoriaprodutosajustados.html')
})

///////////////////////////////////////////////////////////////////
//Processos

app.get('/processossolicitacoes.html', function(req, res){
  res.sendFile(__dirname + '/processossolicitacoes.html')
})

app.get('/processossolicitar.html', function(req, res){
  res.sendFile(__dirname + '/processossolicitar.html')
})

app.get('/processossolicitacoesabertas.html', function(req, res){
  res.sendFile(__dirname + '/processossolicitacoesabertas.html')
})

app.get('/processosfinalizados.html', function(req, res){
  res.sendFile(__dirname + '/processosfinalizados.html')
})

app.get('/processosgerenciar.html', function(req, res){
  res.sendFile(__dirname + '/processosgerenciar.html')
})

///////////////////////////////////////////////////////////////////
//PCP

app.get('/pcplistas.html', function(req, res){
  res.sendFile(__dirname + '/pcplistas.html')
})

app.listen(3000)
