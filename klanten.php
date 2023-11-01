
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
<p>Dashboard klanten</p>
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
          title: 'Maandelijkse gebruikers 2022',
          curveType: 'line',
          legend: { position: 'bottom' },
          backgroundColor: 'transparent'
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </div>
  
  <div class="sidebar2">
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
        colors: ["orange", "red"],
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
          title: 'devices die klanten gebruiken',
          pieHole: 0.4,
          legend : { position : 'bottom',    
          },  colors: ['#7070db', '#80bfff', '#ff6699']


        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
    <script>
    
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['besturingssyteem',  'gebruikers'],
          ['IOS', 22167],
          ['Andriod',   9503  ],
          ['Macintosh', 7142 ],
          ['Windows', 5360],
          ['Linux',    318],
          ['Chrome',    119],
   
        ]);

        var options = {
            backgroundColor: 'transparent',
          title: 'Besturingssyteem 2022-2023',
          is3D: true,
          legend : { position : 'bottom'
          },
          colors: ['#990066','#800000','#4700b3','#9966ff','black']

        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
      
    </script>
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