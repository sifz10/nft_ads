(function($) {
    /* "use strict" */


 var dzChartlist = function(){
	
	var screenWidth = $(window).width();
	
	var donutChart = function(){
		$("span.donut").peity("donut", {
			width: "80",
			height: "80"
		});
	}
	
	/* Function ============ */
		return {
			init:function(){
			},
			
			
			load:function(){
				donutChart();
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