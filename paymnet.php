<!DOCTYPE html>
<html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>
<div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['payment', 'orders'],
  ['Ideal',1904],
  ['Creditcard',146],
  ['Paypal',93],
  ['Klarna',74],
  ['Bancontact',24],
  ['Applepay',21],
]);

var options = {
  title:'Bethaalmethode'
};

var chart = new google.visualization.BarChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>

</body>
</html>