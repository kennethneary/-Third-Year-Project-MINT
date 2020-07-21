var chart;
	$(document).ready(function() {
		// Highcharts options
		var options = {
			chart: {
				renderTo: 'container',
				defaultSeriesType: 'column',
				marginRight: 10,
				marginBottom: 80
				
			},
			
			title: {
				text: 'Hourly Activity',
				x: 30 //center
			},
			subtitle: {
				text: '',
				x: -20
			},
			
			xAxis: {
				
				title: {
					enabled: true,
					text: 'Time (5 min)'
				},
					type: 'datetime',
					tickInterval: 300 * 1000, // 5 min
					tickWidth: 1,
					gridLineWidth: 1,
					
				labels: {
					align: 'center',
					x: -2,
					y: 15,
					formatter: function() {
						return Highcharts.dateFormat('%M:%S', this.value);
					}
				}
			},
			
			yAxis: {
				min: 0,
				allowDecimals: false,
				max: 1,
				
				title: {
					text: 'Activity'
				},
			
			},
			
			tooltip: {
				formatter: function() {
					return Highcharts.dateFormat('%A %H:%M:%S', this.x) +'<br/>Activity: '+ this.y + '</b>';
				}
			},
		
			
			legend: {
				align: 'center',
				verticalAlign: 'bottom',
				y: 10,
				x: 30,
				floating: true,
				borderWidth: 1
			},
			
				
			plotOptions: {
                series: {
					animation: false,
                }
            },
				
			
			series: [{
				name: 'Hourly Activity',
				groupPadding: 0.15
			}]
		}
			
		function refresher()
		{
			
			$.ajax({
				
				url:'data/data0.php',
				data: null,
				success: function(tsv) {
					
					var lines = [],
						traffic = [],
						date;
					
					try {
						// split the data return into lines and parse them
						tsv = tsv.split(/\n/g);
						$.each( tsv, function(i, line) {
							line = line.split(/\t/);
							date = Date.parse(line[0] +' UTC');
							traffic.push( [date, parseInt(line[1].replace(',', ''), 10)] );
						});
					} catch (e) { }
					
					options.series[0].data = traffic;
					// create chart
					chart = new Highcharts.Chart(options);
				} 
				
			});
			
		}	
		refresher();
		var seconds = 10;
		// call refresher function every 10 seconds
		setInterval(refresher, seconds * 1000);

	});