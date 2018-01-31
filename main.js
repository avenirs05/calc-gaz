$(function () {  

		var enteredAmount = $('#entered-amount');  

		if ( $('#ppm').prop('checked') ) {
			console.log('ppm!!!');
		}

		$('#calc-btn-convert').click(function() {

			if ( $('#azot').prop('selected') ) {
						$('#percent-vol-amount').text( enteredAmount.val() / 10000 );
						$('#nkpr-amount').text('0');

						if ( $('#ppm-radio').prop('checked') ) {
									 $('#ppm-amount').text( enteredAmount.val() );
									 $('#mg-m3-amount').text( enteredAmount.val() * chemEl.azot.ppm );	
									 $('#percent-vol-amount').text( enteredAmount.val() / 10000 );						 
						}
						
						if ( $('#mg-m3-radio').prop('checked') ) {
									 $('#ppm-amount').text( enteredAmount.val() * chemEl.azot.mg );
									 $('#mg-m3-amount').text( enteredAmount.val() );									 
									 $('#percent-vol-amount').text( $('#ppm-amount').text() / 10000 );
						}
						
						if ( $('#percent-vol-radio').prop('checked') ) {

						}
						// if ( $('#nkpr-radio').prop('checked') ){
						// 			$('#ppm-amount').text('0');
						// 			$('#mg-m3-amount').text('0');
						// }

			}

			// if ( $('#ammiak').prop('selected') ) {
			// 		$('#ppm-amount').text('5');
			// 		$('#mg-m3-amount').text('6');
			// 		$('#percent-vol-amount').text('7');
			// 		$('#nkpr-amount').text('8');
			// }

		})







});