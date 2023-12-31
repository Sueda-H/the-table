<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
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
        };

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="regions_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>
