google.charts.load('current', {'packages':['corechart', 'controls']});
google.charts.setOnLoadCallback(drawDashboard);

function drawDashboard() {
  var dashboard = new google.visualization.Dashboard(document.getElementById('dashboard_div'));

  // Create a range slider, passing some options
  var weightRangeSlider = new google.visualization.ControlWrapper({
    'controlType': 'ChartRangeFilter',
    'containerId': 'filter_div',
    'options': {
      'filterColumnLabel': 'Date',
      'ui': {
        // 1 day in milliseconds = 24 * 60 * 60 * 1000 = 86,400,000
        'minRangeSize': 86400000
      }
    },
  });

  // Create a scatter chart, passing some options
  var scatterChart = new google.visualization.ChartWrapper({
    'chartType': 'ScatterChart',
    'containerId': 'chart_div',
    'options': {
      vAxis: {title: 'Weight'},
      'trendlines': { 0: {
        'tooltip': false,
      } }, 
      legend: 'none'
    }
  });
  
  // Adding data to scatter chart.
  var data = new google.visualization.DataTable();
  data.addColumn('date', 'Date');
  data.addColumn('number', 'Weight(Kg)');
  var user_weights = JSON.parse($('#user_weights').html());
  for (var i = 0; i < user_weights.length; i++) {
    data.addRow([new Date(user_weights[i]['created_at']), user_weights[i]['weight']]);
  }

  // Trendline may cause data empty. hide errors from user.
  // Problem Solved in custom.scss file.

  // 'scatterChart' will update whenever you interact with 'weightRangeSlider'
  // to match the selected range.
  dashboard.bind(weightRangeSlider, scatterChart);
  dashboard.draw(data);
}