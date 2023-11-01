<?php
            try {
              $pdo = new PDO("mysql:host=localhost;dbname=thetable", 'bit_academy', 'bit_academy');
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
              echo "Connection failed: " . $e->getMessage();
            }
            ?>
            
<!DOCTYPE html>
<head>
<link rel = "stylesheet" href="style.css">
<title></title>
    <body>
    <div id="piechart_3d" style="width: 500px; height: 500px;"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
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
          title: 'Besturingssyteem 2022-2023',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
      
    </script>
    </body>
</head>
</html>