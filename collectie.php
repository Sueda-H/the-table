
<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="new.css">
</head>
<style>
    

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

li a {
  display: flex;
  width: 170px;
 background-color:rgb(238,238,238);
  height:210px;
 
}
</style>
<ul class="nav">
<p>Dashboard collectie</p>
</ul>
<body>

<div class="navbar">
 
<ul>


  <br><li><a href="#home"> <img src="logo.jpeg" width="170px" height="50px" >  </a></li>

  <li><a id = "news"  href="#news"><img src="shopping.png" width="40px" height="40px">collectie</a></li>
  <li><a  id = "contact"  href="#contact"><img src="rating.png" width="40px" height="40px">klanten</a></li>
  <li><a  id = "about"  href="#about"> <img src="about.png" width="40px" height="40px">About</a></li>

</ul>
</div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', { 'packages': ['corechart'] });
      google.charts.setOnLoadCallback(drawChart);
      

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['jaar', 'gebruikers'],
          ['Jan', 7054,],
          ['Feb', 4730,],
          ['Ma', 4058,],
          ['Apr', 3337,],
          ['mei', 3306,],
          ['juni', 2566,],
          ['juli', 2522,],
          ['aug', 2328,],
          ['sept', 2233,],
          ['okt', 3444,],
          ['nov', 3663,],
          ['dec', 3542,]
        ]);

        var options = {
          title: 'Maandelijkse gebruikers 2022-2023',
          curveType: 'line',
          legend: { position: 'bottom' },
          backgroundColor: 'transparent'
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </div>
  


  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['geochart'],
    });
    google.charts.setOnLoadCallback(drawRegionsMap);

    function drawRegionsMap() {
      var data = google.visualization.arrayToDataTable([
        ['Land', 'Bestellingen'],
        ['Netherlands', 3221],
        ['Germany', 1612],
        ['Belgium', 132],
        ['Austria', 47],
        ['France', 29],
        ['United Kingdom', 11],
        ['Spain', 9],
        ['Italy', 2],
        ['Luxembourg', 2],
      ]);

      var options = {
    
        colors: ["lightgreen", "darkgreen"],
        region: "150",
        backgroundColor: 'transparent'
        
      };

      var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

      chart.draw(data, options);
    }
  </script>
  </div>
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
  title:'Bethaalmethode',
  backgroundColor: 'transparent'
};

var chart = new google.visualization.BarChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>
<script>

      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['device', ''],
          ['mobiel',     29737],
          ['dektop',      12832],
          ['tablet',  2168],
         
        ]);

        var options = {backgroundColor: 'transparent',
          title: 'devices die klanten gebruiken 2022-2023',
          pieHole: 0.4,
          legend : { position : 'bottom'
          },

        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
    <div>
    <h3>Bestverkopende producten 2022-2023</h3>
    
<table class="styled-table">
    <thead>
        <tr>
            <th>Product</th>
            <th>Opbrengst</th>
            <th>aantal</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Atelier-pastabord-mushroom</td>
            <td>€1177,05</td>
            <td>11</td>
         </tr>
         <tr>

         </tr>
        <tr class="active-row">
            <td>Weave-set 4 placemats- wheat</td>
            <td>€1131,75</td>
            <td>23</td>
        </tr>
        <tr>
            <td>Attic- mix set 8 borden-seabass and oyster</td>
            <td>€1058,55</td>
            <td>4</td>
        </tr>

        <tr class="active-row">
            <td>Atelier-medium kom - asparagus</td>
            <td>€ 1040,73</td>
            <td>18</td>
        </tr>
        <tr>
            <td>Atelier-set 4 dinerborden-asparagus</td>
            <td>€867,36</td>
            <td>7</td>
        </tr>
        <tr class="active-row">
            <td>Atelier-ontbijtbord-asparagus</td>
            <td>€696,11</td>
            <td>13</td>
        </tr>
        <tr>
            <td>Atelier-pastabord-milk</td>
            <td>€681,16</td>
            <td>8</td>
        </tr>
    </div>
    </tbody>
</table>
<script type="text/javascript">
    document.getElementById("news").onclick = function () {
        location.href = "collectie.php";
    };
    document.getElementById("contact").onclick = function () {
        location.href = "klanten.php";
    };
    </script>

</head>

<body>

  <div id="curve_chart" ></div>
  <div id="regions_div"></div>
  <div id="myChart"></div>
  <div id="donutchart"></div>
  <div id="piechart_3d"></div>
  
</body> 
