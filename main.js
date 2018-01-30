$(function () {    

		if ( $('#ppm').prop('checked') ) {
			console.log('ppm!!!');
		}

		$('#measuring-wrap').change(function() {

			console.log( $('#azot').prop('selected') );
			
			if ( $('#ppm').prop('checked') ) {
				console.log('ppm');
			}

			if ( $('#mg-m3').prop('checked') ) {
				console.log('mg-m3');
			}

			if ( $('#percent-vol').prop('checked') ) {
				console.log('percent-vol');
			}

			if ( $('#nkpr').prop('checked') ) {
				console.log('ppm');
			}

		})




});