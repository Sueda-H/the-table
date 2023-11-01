<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['jaar', 'gebruikers'],
          ['Jan',  7054,    ],
          ['Feb',  4730,     ],
          ['Ma',  4058,    ],
          ['Apr',  3337,   ],
          ['mei',  3306,   ],
          ['juni',  2566,   ],
          ['juli',  2522,   ],
          ['aug',  2328,   ],
          ['sept',  2233,   ],
          ['okt',  3444,   ],
          ['nov',  3663,   ],
          ['dec',  3542,   ]
        ]);

        var options = {
          title: 'Maandelijkse gebruikers 2022',
          curveType: 'line',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
