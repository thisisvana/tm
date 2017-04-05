$(document).ready(function(){

  $('.final-result').click(function(){
              $('#container-chart').css('display','block');
              displayChart() });
           });

          function displayChart(){

            // tally total of votes to convert to percentage
            var totalVotes = parseInt(localStorage.libResult) + parseInt(localStorage.consResult) + parseInt(localStorage.ndpResult) + parseInt(localStorage.greenResult);

            // Make colors array and set them sections
            Highcharts.getOptions().plotOptions.pie.colors = (function () {
                var blue='rgb(17,115,186)';
                var red='rgb(230,38,60)';
                var orange='rgb(232,149,27)';
                var green='rgb(34,167,126)';

                var colors = [blue, red,orange, green],
                    base = Highcharts.getOptions().colors[0],
                    i;

                for (i = 0; i < 10; i += 1) {
                    // Start out with a darkened base color (negative brighten), and end
                    // up with a much brighter color
                    colors.push(Highcharts.Color(base).brighten((i - 3) / 7).get());
                }
                return colors;
            }());

            // Build the chart
            Highcharts.chart('container-chart', {
              chart: {
                plotBackgroundColor: "#ededed",
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Your MYVU Score'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true
                    },
                    showInLegend: true
                }
            },

            legend: {
                align: 'right',
                verticalAlign: 'top',
                layout: 'vertical',
                x: 0,
                y: 180
            },

            // use localStorage values to draw the chart
            series: [{
                name: 'Parties',
                colorByPoint: true,
                data: [{
                   name: 'Conservative Party',
                  y: (parseInt(localStorage.consResult) / totalVotes) *100 // convert to percentage
              }, {
                  name: 'Liberal Party',
                  y: (parseInt(localStorage.libResult)/ totalVotes) *100

              }, {
                  name: 'New Democratic Party',
                  y: (parseInt(localStorage.ndpResult) / totalVotes) *100
              }, {
                  name: 'Green Party',
                  y: (parseInt(localStorage.greenResult) / totalVotes) *100
                }]
            }]
          });
};
