// Using CommonJS
var Chart = require('chart.js')
var myChart = new Chart({...})

// ES6
import Chart from 'chart.js'
let myChart = new Chart({...})

// Using requirejs
require(['path/to/Chartjs'], function(Chart){
 var myChart = new Chart({...})
})
