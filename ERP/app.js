const express = require('express')
const app = express();
const path = require('path')

app.use('/public', express.static('public'))

app.get('/', function(req, res){
  res.sendFile(__dirname + '/inicial.html')
})

app.get('/sidebar1.html', function(req, res){
  res.sendFile(__dirname + '/sidebar1.html')
})

app.get('/loginpage.html', function(req, res){
  res.sendFile(__dirname + '/loginpage.html')
})

app.get('/cadastroproduto.html', function(req, res){
  res.sendFile(__dirname + '/cadastroproduto.html')
})

app.get('/cadastrocliente.html', function(req, res){
  res.sendFile(__dirname + '/cadastrocliente.html')
})

app.get('/notafiscal.html', function(req, res){
  res.sendFile(__dirname + '/notafiscal.html')
})

app.get('/propostacomercial.html', function(req, res){
  res.sendFile(__dirname + '/propostacomercial.html')
})

app.get('/contasapagar.html', function(req, res){
  res.sendFile(__dirname + '/contasapagar.html')
})

app.get('/contasareceber.html', function(req, res){
  res.sendFile(__dirname + '/contasareceber.html')
})

app.get('/centrodecusto.html', function(req, res){
  res.sendFile(__dirname + '/centrodecusto.html')
})

app.get('/fluxodecaixa.html', function(req, res){
  res.sendFile(__dirname + '/fluxodecaixa.html')
})

app.get('/planodecontasgerencial.html', function(req, res){
  res.sendFile(__dirname + '/planodecontasgerencial.html')
})

app.get('/fundofixo.html', function(req, res){
  res.sendFile(__dirname + '/fundofixo.html')
})

app.get('/pedidodevenda.html', function(req, res){
  res.sendFile(__dirname + '/pedidodevenda.html')
})

app.get('/listadepreco.html', function(req, res){
  res.sendFile(__dirname + '/listadepreco.html')
})

app.get('/requisicaodecompra.html', function(req, res){
  res.sendFile(__dirname + '/requisicaodecompra.html')
})

app.listen(3000)
