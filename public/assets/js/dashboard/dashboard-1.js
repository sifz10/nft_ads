(function($) {
    /* "use strict" */


 var dzChartlist = function(){
	
	var screenWidth = $(window).width();
		
	var chartCircle = function(){
		
		
		var optionsCircle = {
		  chart: {
			type: 'radialBar',
			//width:320,
			height: 370,
			offsetY: 0,
			offsetX: 0,
			
		  },
		  plotOptions: {
			radialBar: {
			  size: undefined,
			  inverseOrder: false,
			  hollow: {
				margin: 0,
				size: '35%',
				background: 'transparent',
			  },
			  
			  
			  
			  track: {
				show: true,
				background: '#e1e5ff',
				strokeWidth: '10%',
				opacity: 1,
				margin: 18, // margin is in pixels
			  },


			},
		  },
		  responsive: [{
          breakpoint: 480,
          options: {
			chart: {
			offsetY: 0,
			offsetX: 0
		  },	
            legend: {
              position: 'bottom',
              offsetX:0,
              offsetY: 0
            }
          }
        }],
		
		fill: {
          opacity: 1
        },
		
		colors:['#FF285C', '#5856CE', '#56C7CE'],
		series: [73, 64, 48],
		labels: ['Instagram', 'Facebook', 'Twitter'], 
		legend: {
			fontSize: '16px',  
			show: false,
		  },		 
		}

		var chartCircle1 = new ApexCharts(document.querySelector('#chartCircle'), optionsCircle);
		chartCircle1.render();
		
	}
	
	var activityChart = function(){
		var activity = document.getElementById("activity");
			if (activity !== null) {
				var activityData = [{
						first: [ 20, 30, 25, 28, 23, 32, 26, 32, 21, 35, 24, 28, 22, 27, 30, 35, 20, 25, 22, 29],
						second: [ 35, 40, 30, 38, 32, 42, 30, 35, 40, 30, 45, 30, 35, 40, 30, 38, 32, 42, 32, 42]
					},
					{
						first: [ 35, 35, 40, 30, 38, 40, 30, 38, 32, 42, 32, 42, 32, 42, 30, 35, 22, 30, 45, 30],
						second: [ 35, 40, 40, 30, 38, 32, 42, 32, 42, 30, 38, 32, 42, 30, 35, 22, 30, 45, 30, 35]
					},
					{
						first: [ 35, 40, 40, 30, 38, 32, 42, 32, 42, 30, 38, 32, 42, 30, 35, 22, 30, 45, 30, 35],
						second: [ 30, 35, 40, 30, 38, 32, 42, 32, 42, 35, 40, 30, 38, 32, 42, 30, 35, 22, 30, 45]
					},
					{
						first: [ 35, 40, 30, 38, 32, 42, 30, 35, 22, 30, 45, 30, 35, 40, 30, 38, 32, 42, 32, 42],
						second: [ 35, 35, 40, 30, 38, 40, 30, 38, 32, 42, 32, 42, 32, 42, 30, 35, 22, 30, 45, 30]
					}
				];
				activity.height = 300;
				
				var config = {
					type: "line",
					data: {
						labels: [
							"01",
							"02",
							"03",
							"04",
							"05",
							"06",
							"07",
							"08",
							"09",
							"10",
							"11",
							"12",
							"13",
							"14",
							"15",
							"16",
							"17",
							"18",
							"19",
							"20",
						],
						datasets: [{
								label: "Active",
								backgroundColor: "rgba(82, 177, 65, 1)",
								borderColor: "rgba(82, 177, 65, 1)",
								data: activityData[0].first,
								borderWidth: 0
							},
							{
								label: "Inactive",
								backgroundColor: 'rgba(255, 142, 38, 1)',
								borderColor: "rgba(255, 142, 38, 1)",
								data: activityData[0].second,
								borderWidth: 0,
								
							}
						]
					},
					options: {
						responsive: true,
						maintainAspectRatio: false,
						elements: {
								point:{
									radius: 0
								}
						},
						legend:false,
						
						scales: {
							yAxes: [{
								gridLines: {
									color: "rgba(89, 59, 219,0.1)",
									drawBorder: true
								},
								ticks: {
									fontColor: "#999",
								},
							}],
							xAxes: [{
								gridLines: {
									display: false,
									zeroLineColor: "transparent"
								},
								ticks: {
									stepSize: 5,
									fontColor: "#999",
									fontFamily: "Nunito, sans-serif"
								}
							}]
						},
						tooltips: {
							enabled: false,
							mode: "index",
							intersect: false,
							titleFontColor: "#888",
							bodyFontColor: "#555",
							titleFontSize: 12,
							bodyFontSize: 15,
							backgroundColor: "rgba(256,256,256,0.95)",
							displayColors: true,
							xPadding: 10,
							yPadding: 7,
							borderColor: "rgba(220, 220, 220, 0.9)",
							borderWidth: 2,
							caretSize: 6,
							caretPadding: 10
						}
					}
				};

				var ctx = document.getElementById("activity").getContext("2d");
				var myLine = new Chart(ctx, config);

				var items = document.querySelectorAll("#user-activity .nav-tabs .nav-item");
				items.forEach(function(item, index) {
					item.addEventListener("click", function() {
						config.data.datasets[0].data = activityData[index].first;
						config.data.datasets[1].data = activityData[index].second;
						myLine.update();
					});
				});
			}
	
		
	}
	
	var columnChart = function(){
		var options = {
			series: [{
				name: 'Instagram',
				data: [44, 55, 41, 67, 22, 43, 44, 55]
			}, {
				name: 'Facebook',
				data: [13, 23, 20, 8,  13, 27, 13, 23]
			}, {
				name: 'Twitter',
				data: [11, 17, 15, 15, 21, 14, 11, 17]
			}],
			chart: {
				type: 'bar',
				height: 250,
				stacked: true,
				toolbar: {
					show: false,
				}
			},
			responsive: [{
				breakpoint: 480,
				options: {
					legend: {
						position: 'bottom',
						offsetX: -10,
						offsetY: 0
					}
				}
			}],
			plotOptions: {
				bar: {
					horizontal: false,
					columnWidth: '20%',
					endingShape: "rounded",
					backgroundRadius: 10,
					colors: {
						backgroundBarColors: ['#f0f0f0', '#f0f0f0', '#f0f0f0', '#f0f0f0', '#f0f0f0', '#f0f0f0', '#f0f0f0'],
						backgroundBarOpacity: 1,
						backgroundBarRadius: 5,
					},
				},
				
			},
			colors:['#ff285c', '#5856ce', '#56c7ce'],
			xaxis: {
				show: true,
				
				axisBorder: {
					show: true,
				},
				
				labels: {
					style: {
						colors: '#333',
						fontSize: '13px',
						fontFamily: 'Poppins',
						fontWeight: 300,
						cssClass: 'apexcharts-xaxis-label',
					},
				},
				crosshairs: {
					show: false,
				},
				
				categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
			},
			yaxis: {
				show: false
			},
			grid: {
				show: false,
			},
			toolbar: {
				enabled: false,
			},
			dataLabels: {
			  enabled: false
			},
			legend: {
				position: 'bottom',
				offsetY: 0
			},
			fill: {
				opacity: 1
			}
		};

		var chart = new ApexCharts(document.querySelector("#columnChart"), options);
		chart.render();
	}
	
	
	jQuery('.header-profile.side').on('click',function(){
		jQuery('.profile-sidebar').addClass('active');
	});
	jQuery('.profile-sidebar .close-side').on('click',function(){
		jQuery('.profile-sidebar').removeClass('active');
	});
	
	
	/* Function ============ */
		return {
			init:function(){
			},
			
			
			load:function(){
				chartCircle();
				activityChart();
				columnChart();
			},
			
			resize:function(){
				
			}
		}
	
	}();

	jQuery(document).ready(function(){
	});
		
	jQuery(window).on('load',function(){
		setTimeout(function(){
			dzChartlist.load();
		}, 1000); 
		
	});

	jQuery(window).on('resize',function(){
		
		
	});     

})(jQuery);