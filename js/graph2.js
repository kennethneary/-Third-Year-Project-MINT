var chart;
			$(document).ready(function() {
				// Highcharts options
				var options = {
					chart: {
						renderTo: 'container',
						defaultSeriesType: 'column',
						zoomType: 'x',
						marginRight: 10,
						marginBottom: 80
					},
					title: {
						text: 'Weekly Activity',
						x: 30 //center
					},
					subtitle: {
						text: '',
						x: -20
					},
					xAxis: {
						title: {
                    enabled: true,
						text: '24 Hours'
						},
						type: 'datetime',
						maxZoom: 2 * 24 * 3600 * 1000,
						tickInterval: 24 * 3600 * 1000, // one day
						tickWidth: 0,
						gridLineWidth: 0,
						labels: {
							align: 'center',
							x: -2,
							y: 13,
							formatter: function() {
								return Highcharts.dateFormat( '%e. %b', this.value);
							}
						}
					},
					yAxis: {
						min: 0,
						allowDecimals: false,
						title: {
							text: 'Activity'
						},
					
					},
					tooltip: {
						formatter: function() {
				                return Highcharts.dateFormat('%A', this.x) +'<br/>Activity: '+ this.y + '</b>';
						}
					},
					plotOptions: {
						series: {
							cursor: 'pointer',
							point: {
								events: {
									click: function(event) {
									// format data to be sent to PHP script via AJAX
									var hour = Highcharts.dateFormat('%A', this.x);
										
										// send hour variable to ajax1.php
										$.ajax({
											type: "POST",
											url: 'data/ajax1.php',
											data: {variable: hour},
											dataType: 'json',
											success: function(response)
											{				
												if(response.success === true){
													window.location.href = "graph1.php#position";
												}
											}
										});							
									}
								}  
							}
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
					series: [{
						name: 'Weekly Activity',
						groupPadding: 0.15
					}]
				}
				
				$.ajax({
			
					url:'data/data2.php',
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
				
				
			});