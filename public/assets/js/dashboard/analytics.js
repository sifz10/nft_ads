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
				margin: 17, // margin is in pixels
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
		stroke: {
          lineCap: 'round'
        },
		
		colors:['#FF285C', '#5856CE', '#56C7CE'],
		series: [75, 65, 50],
		labels: ['New', 'Recover', 'In Treatment'], 
		legend: {
			fontSize: '16px',  
			show: false,
		  },		 
		}

		var chartCircle1 = new ApexCharts(document.querySelector('#chartCircle'), optionsCircle);
		chartCircle1.render();
		
	}
	
	var chartratio = function(){
		
		var options = {
          series: [56],
          chart: {
          height: 250,
          type: 'radialBar',
          toolbar: {
            show: false
          }
        },		
        plotOptions: {
          radialBar: {
            startAngle: -100,
            endAngle: 260,
             hollow: {
              margin: 0,
              size: '70%',
              background: '#fff',
              image: undefined,
			  
              imageOffsetX: 0,
              imageOffsetY: 0,
              position: 'front',
            },
            track: {
              background: '#e1e5ff',
              strokeWidth: '100%',
              margin: 0, // margin is in pixels
            },
        
            dataLabels: {
              show: true,
              name: {
                offsetY: -10,
                show: true,
                color: '#888',
                fontSize: '17px'
              },
              value: {
                formatter: function(val) {
                  return parseInt(val);
                },
                color: '#111',
                fontSize: '36px',
                show: true,
              }
            }
          }
        },
        fill: {
          type: 'gradient',
          gradient: {
            shade: 'dark',
            type: 'horizontal',
            shadeIntensity: 0.5,
            gradientToColors: ['#5856CE'],
            inverseColors: true,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 100]
          }
        },
        stroke: {
		  dashArray: 4,
        },
        labels: [''],
        };

        var chart = new ApexCharts(document.querySelector("#chartratio"), options);
        chart.render();
		
	}
	
	var activityChart = function(){
		var activity = document.getElementById("activity");
			if (activity !== null) {
				var activityData = [{
						first: [ 30, 35, 40, 30, 38, 32, 42, 32, 42, 35, 40, 30, 38, 32, 42, 30, 35, 22, 30, 45]
					},
					{
						first: [35, 35, 40, 30, 38, 40, 30, 38, 32, 42, 32, 42, 32, 42, 30, 35, 22, 30, 45, 30]
					},
					{
						first: [35, 40, 40, 30, 38, 32, 42, 32, 42, 30, 38, 32, 42, 30, 35, 22, 30, 45, 30, 35]
					},
					{
						first: [35, 40, 30, 38, 32, 42, 30, 35, 22, 30, 45, 30, 35, 40, 30, 38, 32, 42, 32, 42]
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
						datasets: [
							{
								label: "My First dataset",
								data:  [35, 40, 30, 38, 32, 42, 30, 35, 22, 30, 45, 30, 35, 40, 30, 38, 32, 42, 32, 42],
								borderColor: 'rgba(26, 51, 213, 0)',
								borderWidth: "0",
								backgroundColor: 'rgba(82, 177, 65, 1)'
								
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
						myLine.update();
					});
				});
			}
	
		
	}
	
	var activityChart2 = function(){
		var activity = document.getElementById("activity2");
			if (activity !== null) {
				var activityData = [{
						first: [30, 35, 40, 30, 38, 32, 42, 32, 42, 35, 40, 30, 38, 32, 42, 30, 35, 22, 30, 45]
					},
					{
						first: [35, 35, 40, 30, 38, 40, 30, 38, 32, 42, 32, 42, 32, 42, 30, 35, 22, 30, 45, 30]
					},
					{
						first: [35, 40, 40, 30, 38, 32, 42, 32, 42, 30, 38, 32, 42, 30, 35, 22, 30, 45, 30, 35]
					},
					{
						first: [35, 40, 30, 38, 32, 42, 30, 35, 22, 30, 45, 30, 35, 40, 30, 38, 32, 42, 32, 42]
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
						datasets: [
							{
								label: "My First dataset",
								data:  [30, 35, 40, 30, 38, 32, 42, 32, 42, 28, 35, 30, 40, 35, 42, 30, 35, 25, 30, 28],
								borderColor: 'rgba(26, 51, 213, 0)',
								borderWidth: "0",
								backgroundColor: 'rgba(255, 142, 38, 1)'
								
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

				var ctx = document.getElementById("activity2").getContext("2d");
				var myLine = new Chart(ctx, config);

				var items = document.querySelectorAll("#user-activity2 .nav-tabs .nav-item");
				items.forEach(function(item, index) {
					item.addEventListener("click", function() {
						config.data.datasets[0].data = activityData[index].first;
						myLine.update();
					});
				});
			}
	
		
	}
	var columnChart = function(){
		var options = {
			series: [{
				name: 'Instagram',
				data: [44, 55, 41, 67, 22, 43, 44, 55, 41, 67, 22, 43, 44, 55, 41]
			}, {
				name: 'Facebook',
				data: [13, 23, 20, 8,  13, 27, 13, 23, 20,  8, 13, 27, 13, 23, 20]
			}, {
				name: 'Twitter',
				data: [11, 17, 15, 15, 21, 14, 11, 17, 15, 15, 21, 14, 15, 15, 21]
			}],
			chart: {
				type: 'bar',
				height: 250,
				stacked: true,
				toolbar: {
					show: false,
				},
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
						backgroundBarColors: ['#f0f0f0', '#f0f0f0', '#f0f0f0', '#f0f0f0', '#f0f0f0', '#f0f0f0', '#f0f0f0', '#f0f0f0', '#f0f0f0', '#f0f0f0', '#f0f0f0', '#f0f0f0'],
						backgroundBarOpacity: 1,
						backgroundBarRadius: 5,
					},
				},
				
			},
			colors:['#ff285c', '#5856ce', '#56c7ce'],
			xaxis: {
				show: true,
				type: 'datetime',
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
				
				categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT',
				'01/05/2011 GMT', '01/06/2011 GMT', '01/07/2011 GMT', '01/08/2011 GMT', '01/09/2011 GMT', '01/10/2011 GMT',
				'01/11/2011 GMT', '01/12/2011 GMT', '01/13/2011 GMT', '01/14/2011 GMT', '01/15/2011 GMT'
				],
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
	/* Function ============ */
		return {
			init:function(){
			},
			
			
			load:function(){
				chartCircle();		
				chartratio();
				activityChart();
				activityChart2();
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