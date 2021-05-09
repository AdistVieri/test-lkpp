
$('#search-button').on('click', function(){
	$('#histories').text('');
	$('#history').text('');
	$('#history').text('');


	$('#receipt').text('');
	$('#courier').text('');
	$('#service').text('');
	$('#date').text('');

	$('#receiver').text('');
	$('#receiver_location').text('');

			
	$('#sender').text('');
	$('#sender_location').text('');

	$.ajax({

		url: 'https://api.binderbyte.com/v1/track?',
		type : 'get',
		dataType: 'json',
		data: {
			'api_key': '74d5d3d7f2f697fa01a19bbef4b4a09e0487e589520176e0f417d531437df6cc',
			'courier': $('input[type=radio][name=courier]:checked').val(),
			'awb': $('#search-receipt').val(),
		},
		success: function(result) {
			data = result.data
		
			$('#history').html(data.summary.awb);
			$('#history').html(data.history[0].desc + ' '+ data.history[0].location + " " +  data.history[0].date);


			$('#receipt').html(data.summary.awb);
			$('#courier').html(data.summary.courier);
			$('#service').html(data.summary.service);
			$('#date').html(data.summary.date);

			$('#receiver').html(data.detail.receiver);
			$('#receiver_location').html(data.detail.destination);

			
			$('#sender').html(data.detail.shipper);
			$('#sender_location').html(data.detail.origin);
			
			let history = data.history;
			$('#histories').append(`
				<tr>
  					<th>Tanggal / Waktu</th>
  					<th>Deskripsi</th>
  				</tr>
				`);
			for (var i=(history.length-1); i>=0; i--){
				$('#histories').append(`
				<tr>
  					<td>`+ history[i].date +`</td>
  					<td>`+ history[i].desc +`</td>
  					<td>`+ history[i].location +`</td>
  				</tr>
				`);
			}

			var lastIndex = history[history.length-1].date;
			var beforeLastIndex = history[history.length-2].date;
			// var response = lastIndex.getTime() - beforeLastIndex.getTime();
			// $('#response').html(response);


		},

	});
});	
