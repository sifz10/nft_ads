(function($) {
    /* "use strict" */


 var dzChartlist = function(){
	
	var screenWidth = $(window).width();
	
	var donutChart1 = function(){
		$("span.donut1").peity("donut", {
			width: "80",
			height: "80"
		});
	}
	
	/* Function ============ */
		return {
			init:function(){
			},
			
			
			load:function(){
				donutChart1();
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