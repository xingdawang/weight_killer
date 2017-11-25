google.charts.load('current', {
  callback: function () {
    drawChart();

    function drawChart() {
      var initData = {
        "cols": [
          {"id":"","label":"Label","pattern":"","type":"string"},
          {"id":"","label":"Value","pattern":"","type":"number"}
        ],
        "rows": [
          {"c":[{"v":"BMI","f":null},{"v":15,"f":null}]},
        ]
      };

      var data = new google.visualization.DataTable(initData);

      var options = {
        width: 300, height: 300,
        redFrom: 35, redTo: 55,
        yellowFrom: 25, yellowTo: 35,
        greenFrom: 10, greenTo: 25,
        majorTicks : ['15', '20','25','30','35','40','45','50'], minorTicks: 5,
        animation:{
          duration: 1000,
          easing: 'inAndOut'
        },
        max: 50, min: 15
      };

      var chart = new google.visualization.Gauge(document.getElementById('user_today_bmi'));
      var user_today_bmi = $('#user_today_bmi_value').attr('value');

      google.visualization.events.addOneTimeListener(chart, 'ready', function () {
        
        var jsonData = {
          "cols": [
            {"id":"","label":"Label","pattern":"","type":"string"},
            {"id":"","label":"Value","pattern":"","type":"number"}
          ],
          "rows": [
            {"c":[{"v":"BMI","f":null},{"v": user_today_bmi,"f":null}]},
          ]
        };

        var data = new google.visualization.DataTable(jsonData);
        chart.draw(data, options);
      });

      chart.draw(data, options);
    }
  },
  packages:['gauge']
});