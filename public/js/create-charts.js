( function ( $ ) {
	var	i,templength;
	var charts = {
		init: function () {
			// -- Set new default font family and font color to mimic Bootstrap's default styling
			Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
			Chart.defaults.global.defaultFontColor = '#292b2c';

			this.drawchart();

		},
		drawchart: function () {
			var urlPath =  'http://localhost:8000/test';
			var request = $.ajax( {
				method: 'GET',
				url: urlPath
		} );

			request.done( function ( response ) {
				console.log( response );
				i = response.temp.length;
				charts.createCompletedJobsChart( response );
			});
		},

		/**
		 * Created the Completed Jobs Chart
		 */
		createCompletedJobsChart: function ( response ) {

			var ctx = document.getElementById("mychart");
			var myLineChart = new Chart(ctx, {
				type: 'line',
				data: {
					//labels: response.months, // The response got from the ajax request containing all month names in the database
					labels:response.time,	
					datasets: [{
						label: "Temputeture",
						lineTension: 0.3,
						backgroundColor: "rgba(255,69,0,0.2)",
						borderColor: "rgba(255,0,0,1)",
						pointRadius: 5,
						pointBackgroundColor: "rgba(255,69,0,1)",
						pointBorderColor: "rgba(255,255,255,0.8)",
						pointHoverRadius: 5,
						pointHoverBackgroundColor: "rgba(2,117,216,1)",
						pointHitRadius: 20,
						pointBorderWidth: 2,
						//data: response.post_count_data // The response got from the ajax request containing data for the completed jobs in the corresponding months
						data:response.temp
					},
					{
						label: "Humidity",
						lineTension: 0.3,
						backgroundColor: "rgba(2,117,216,0.2)",
						borderColor: "rgba(2,117,216,1)",
						pointRadius: 5,
						pointBackgroundColor: "rgba(2,117,216,1)",
						pointBorderColor: "rgba(255,255,255,0.8)",
						pointHoverRadius: 5,
						pointHoverBackgroundColor: "rgba(2,117,216,1)",
						pointHitRadius: 20,
						pointBorderWidth: 2,
						//data: response.post_count_data // The response got from the ajax request containing data for the completed jobs in the corresponding months
						data:response.himidity
					}],
				},
				options: {
					scales: {
						xAxes: [{
							time: {
								unit: 'date'
							},
							gridLines: {
								display: false
							},
							ticks: {
								maxTicksLimit: 7
							}
						}],
						yAxes: [{
							ticks: {
								min: 0,
								max: response.max, // The response got from the ajax request containing max limit for y axis
								maxTicksLimit: 5
							},
							gridLines: {
								color: "rgba(0, 0, 0, .125)",
								}
						}],
					},
					legend: {
						display: false
					}
				}
			});
		}
	};
	charts.init();

function test (){
		$.ajax({
			type: 'GET',
			url: 'http://localhost:8000/test',
			data: {},
			dataType: 'json',
			success: function(data) 
			{ 
				if(i < data.temp.length){
					// var index = data.temp.length-1;
					// charts.data.labels.push(data.time[index-1]);
					// charts.data.datasets[0].data.push(data.temp[index-1]);
					// charts.data.datasets[1].data.push(data.humidity[index-1]);
					// charts.update();
					charts.drawchart();
				}
			 },
			error: function() { alert('something bad happened'); }
			});

		
	};
	setInterval(test, 2000);
	//setInterval(chart.createCompletedJobsChart, 5000);
} )( jQuery );

