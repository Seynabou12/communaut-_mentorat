

(function($) {
    /* "use strict" */
	
 var dlabChartlist = function(){
	
	var screenWidth = $(window).width();	
	
	var pieChart = function(){
		if(jQuery('#pieChart').length > 0 ){
			//doughut chart
			const pieChart = document.getElementById("pieChart").getContext('2d');
			// pieChart.height = 100;
			new Chart(pieChart, {
				type: 'doughnut',
				data: {
					weight: 3,	
					defaultFontFamily: 'Poppins',
					labels: [
					  'Mentors',
					  'Mentorés',
					],
					datasets: [{
						data: [mentors, mentores],
						borderWidth: 0, 
						borderColor: "rgba(255,255,255,1)",
						backgroundColor: [
							"#8df05f",
							"#ff4b4b"
						],
						hoverBackgroundColor: [
							"#8df05f",
							"#ff4b4b"
						],
						hoverOffset: 4

					}],
				},
				options: {
					weight: 10,	
					responsive: true,
					maintainAspectRatio: true,
					borderWidth: 10
				}
			});
		}
	}
	
 
	/* Function ============ */
		return {
			init:function(){
			},
			
			
			load:function(){
				
				pieChart();
			},
			
			resize:function(){
			}
		}
	
	}();

	
		
	jQuery(window).on('load',function(){
		setTimeout(function(){
			dlabChartlist.load();
		}, 1000); 
		
	});

     

})(jQuery);