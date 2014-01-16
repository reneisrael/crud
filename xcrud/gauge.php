   <script type="text/javascript" src="//www.google.com/jsapi"></script>
   <script type="text/javascript">
      google.load('visualization', '1', {packages: ['gauge']});
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['<?php echo $label; ?>', <?php echo $value; ?>]
        ]);
        var options = {
		  width: 400, height: 120,
		  min: 0, max: 365,
		  redFrom: 0, redTo: 30,
		  yellowFrom: 30, yellowTo: 90,
          greenFrom: 90, greenTo: 365,
          minorTicks: 3
        };
      
        new google.visualization.Gauge(document.getElementById('chart_div<?php print htmlentities($contact->id); ?>')).draw(data, options);
    }  
    </script>
