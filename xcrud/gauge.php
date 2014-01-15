<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <script type="text/javascript" src="//www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['gauge']});
    </script>
    <script type="text/javascript">
      function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['<?php echo $label; ?>', <?php echo $value; ?>]
        ]);
        var options = {
          width: 500, height: 150,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5
        };
      
        // Create and draw the visualization.
        new google.visualization.Gauge(document.getElementById('visualization')).
            draw(data, options);
      }
      google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
  <body style="font-family: Arial;border: 0 none;">
    <div id="visualization" style="width: 600px; height: 300px;"></div>
  </body>
</html>
