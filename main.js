$(function () {  

		var enteredAmount = $('#entered-amount');  

		if ( $('#ppm').prop('checked') ) {
			console.log('ppm!!!');
		}

		$('#calc-btn-convert').click(function() {

			if ( $('#azot').prop('selected') ) {			
						
					if ( $('#ppm-radio').prop('checked') ) {
								 $('#ppm-amount').text( enteredAmount.val() );
								 $('#mg-m3-amount').text( enteredAmount.val() * chemEl.azot.ppm );	
								 $('#percent-vol-amount').text( enteredAmount.val() / 10000 );	
								 $('#nkpr-amount').text( $('#percent-vol-amount').text() * chemEl.azot.pv );					 
					}
					
					if ( $('#mg-m3-radio').prop('checked') ) {
								 $('#ppm-amount').text( enteredAmount.val() * chemEl.azot.mg );
								 $('#mg-m3-amount').text( enteredAmount.val() );									 
								 $('#percent-vol-amount').text( $('#ppm-amount').text() / 10000 );
								 $('#nkpr-amount').text( $('#percent-vol-amount').text() * chemEl.azot.pv );	
					}
					
					if ( $('#percent-vol-radio').prop('checked') ) {
									$('#ppm-amount').text( enteredAmount.val() * 10000 );
									$('#mg-m3-amount').text( $('#ppm-amount').text() * chemEl.azot.ppm );									 
									$('#percent-vol-amount').text( enteredAmount.val() );
									$('#nkpr-amount').text( $('#percent-vol-amount').text() * chemEl.azot.pv );	
					}

					if ( $('#nkpr-radio').prop('checked') ) {
								$('#nkpr-amount').text( '-' );
								$('#percent-vol-amount').text( '-' );
								$('#ppm-amount').text( '-' );
								$('#mg-m3-amount').text( '-' );										
					}
			}

			if ( $('#ammiak').prop('selected') ) {			
						
						if ( $('#ppm-radio').prop('checked') ) {
									 $('#ppm-amount').text( enteredAmount.val() );
									 $('#mg-m3-amount').text( enteredAmount.val() * chemEl.ammiak.ppm );	
									 $('#percent-vol-amount').text( enteredAmount.val() / 10000 );	
									 $('#nkpr-amount').text( $('#percent-vol-amount').text() * chemEl.ammiak.pv );					 
						}
						
						if ( $('#mg-m3-radio').prop('checked') ) {
									 $('#ppm-amount').text( enteredAmount.val() * chemEl.ammiak.mg );
									 $('#mg-m3-amount').text( enteredAmount.val() );									 
									 $('#percent-vol-amount').text( $('#ppm-amount').text() / 10000 );
									 $('#nkpr-amount').text( $('#percent-vol-amount').text() * chemEl.ammiak.pv );	
						}
						
						if ( $('#percent-vol-radio').prop('checked') ) {
										$('#ppm-amount').text( enteredAmount.val() * 10000 );
										$('#mg-m3-amount').text( $('#ppm-amount').text() * chemEl.ammiak.ppm );									 
										$('#percent-vol-amount').text( enteredAmount.val() );
										$('#nkpr-amount').text( $('#percent-vol-amount').text() * chemEl.ammiak.pv );	
						}

						if ( $('#nkpr-radio').prop('checked') ){
									$('#nkpr-amount').text( enteredAmount.val() );
									$('#percent-vol-amount').text( $('#nkpr-amount').text() / chemEl.ammiak.pv );
									$('#ppm-amount').text( $('#percent-vol-amount').text() * 10000 );
									$('#mg-m3-amount').text( $('#ppm-amount').text() * chemEl.ammiak.ppm );										
						}
			}

		})







});