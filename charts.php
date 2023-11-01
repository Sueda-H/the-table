<!-- <?php
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
          ['Billing_Country', 'Order_Count'],
          ['Nederland', 3217],
          ['Duitsland',   1612  ],
          ['België', 132 ],
          ['Oostenrijk', 47],
          ['frankrijk',    29]
   
        ]);

        var options = {
          title: 'bestellingen per land (top 5)',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
      
    </script>
    </body>
</head>
</html> -->

<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<body>
  <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

  <script>
    var xValues = ["Nederland", "Duitsland", "Belgie", "Oosterijk", "FRankrijk"];
    var yValues = [3217, 1612, 132, 47, 29];
    var barColors = [
      "#b91d47",
      "#00aba9",
      "#2b5797",
      "#e8c3b9",
      "#1e7145"
    ];

    new Chart("myChart", {
      type: "doughnut",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        title: {
          display: true,
          text: "bestellingen per land"
        }
      }
    });
  </script>