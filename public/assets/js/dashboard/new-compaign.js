(function($) {
    /* "use strict" */


 var dzChartlist = function(){
	
	var screenWidth = $(window).width();
	
	var inputSelectSlider = function(){
		 //html5 input element
		//var select = document.getElementById('input-select');
		// Append the option elements
		

		var html5Slider = document.getElementById('html5');
		noUiSlider.create(html5Slider, {
			
			connect: true,
			range: {
				'min': 0,
				'10%': 10,
				'20%': 20,
				'30%': 30,
				// Nope, 40 is no fun.
				'50%': 50,
				'60%': 60,
				'70%': 70,
				// I never liked 80.
				'90%': 90,
				'max': 100
			},
			snap: true,
			start: [0, 100]
		});

		var inputNumber = document.getElementById('input-number');
		html5Slider.noUiSlider.on('update', function (values, handle) {

			var value = values[handle];

			if (handle) {
				inputNumber.value = value;
			}
		});

		inputNumber.addEventListener('change', function () {
			html5Slider.noUiSlider.set([null, this.value]);
		});
		//html5 input element
		
	}
	
	/* Function ============ */
		return {
			init:function(){
				
			},
			
			
			load:function(){
				inputSelectSlider();	
			},
			
			resize:function(){
				
			}
		}
	
	}();

	jQuery(document).ready(function(){
	});
		
	jQuery(window).on('load',function(){
		dzChartlist.load(); 
		
	});

	jQuery(window).on('resize',function(){
		
		
	});     

})(jQuery);