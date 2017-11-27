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
          {"c":[{"v":"BFP","f":null},{"v":0,"f":null}]},
        ]
      };

      var data = new google.visualization.DataTable(initData);
      
      var user_today_bfp = $('#user_today_sex_value').attr('value');
      var options = {};
      if(user_today_bfp === "Male") {
          options = {
          width: 300, height: 300,
          redFrom: 30, redTo: 45,
          yellowFrom: 22, yellowTo: 30,
          greenFrom: -5, greenTo: 22,
          majorTicks : ['5','10','15','20','25','30','35','40','45','50'], minorTicks: 5,
          animation:{
            duration: 1000,
            easing: 'inAndOut'
          },
          max: 40, min: 0
        };
      } else {
        var options = {
          width: 300, height: 300,
          redFrom: 40, redTo: 55,
          yellowFrom: 31, yellowTo: 40,
          greenFrom: 5, greenTo: 31,
          majorTicks : ['10','15','20','25','30','35','40','45','50'], minorTicks: 5,
          animation:{
            duration: 1000,
            easing: 'inAndOut'
          },
          max: 50, min: 10
        };
      }

      var chart = new google.visualization.Gauge(document.getElementById('user_today_bfp'));
      var user_today_bfp = $('#user_today_bfp_value').attr('value');

      google.visualization.events.addOneTimeListener(chart, 'ready', function () {
        
        var jsonData = {
          "cols": [
            {"id":"","label":"Label","pattern":"","type":"string"},
            {"id":"","label":"Value","pattern":"","type":"number"}
          ],
          "rows": [
            {"c":[{"v":"BFP","f":null},{"v": user_today_bfp,"f":null}]},
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

var bfp = $('#user_today_bfp_value').attr('value');
var gender = $('#user_today_sex_value').attr('value');
var col = (gender == "Male") ? 2 : 1;
var index_bfp = -1;
if(col == 1) {
  if(bfp >= 10 && bfp <= 13) {
    index_bfp = 0;
  }else if(bfp > 13 && bfp <= 20) {
    index_bfp = 1;
  }else if(bfp > 20 && bfp <= 25) {
    index_bfp = 2;
  }else if(bfp > 25 && bfp <= 31) {
    index_bfp = 3;
  }else if(bfp > 31 && bfp <= 39) {
    index_bfp = 4;
  }else if(bfp > 39){
    index_bfp = 5;
  }else {
    index_bfp = -1;
  }
}else {
  if(bfp >= 3 && bfp <= 6) {
      index_bfp = 0;
    }else if(bfp > 6 && bfp <= 13) {
      index_bfp = 1;
    }else if(bfp > 13 && bfp <= 17) {
      index_bfp = 2; 
    }else if(bfp > 17 && bfp <= 22) {
      index_bfp = 3;
    }else if(bfp > 22 && bfp <= 29) {
      index_bfp = 4;
    }else if(bfp > 29){
      index_bfp = 5;
    }else {
      index_bfp = -1;
    }
}
if(index_bfp != -1){
  $("#bfp tbody tr:gt(0):eq(" + index_bfp + ") td:eq(" + col + ")").addClass("selected-row");
}
