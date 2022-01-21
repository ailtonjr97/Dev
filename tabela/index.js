let cstUnit = document.querySelector('#custoUnitario').textContent;
let estoqueQtd = document.querySelector('#estoqueQtd').textContent;
let cstTotal = document.querySelector('#custoTotal').textContent = (Math.abs(cstUnit * estoqueQtd).toFixed(2))
console.log(typeof cstTotal)
