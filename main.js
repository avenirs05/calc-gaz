$(function () {  

		var enteredAmount = $('#entered-amount');  

		$('#calc-btn-convert').click(function() {

			calcFinalAmounts(chemEl, 'azot', false);
			calcFinalAmounts(chemEl, 'ammiak', true);
			calcFinalAmounts(chemEl, 'acetilen', true);
			calcFinalAmounts(chemEl, 'aceton', true);
			calcFinalAmounts(chemEl, 'benzol', true);
			calcFinalAmounts(chemEl, 'butan', true);
			calcFinalAmounts(chemEl, 'vodorod', true);
			calcFinalAmounts(chemEl, 'geksan', true);
			calcFinalAmounts(chemEl, 'dioksidazota', false);
			calcFinalAmounts(chemEl, 'dioksidugleroda', false);
			calcFinalAmounts(chemEl, 'izobutan', true);
			calcFinalAmounts(chemEl, 'kislorod', false);
			calcFinalAmounts(chemEl, 'ksilol', true);
			calcFinalAmounts(chemEl, 'metan', true);
			calcFinalAmounts(chemEl, 'metanol', true);
			calcFinalAmounts(chemEl, 'ozon', false);
			calcFinalAmounts(chemEl, 'oksidsery', false);
			calcFinalAmounts(chemEl, 'oksidugleroda', true);
			calcFinalAmounts(chemEl, 'oktan', true);
			calcFinalAmounts(chemEl, 'pentan', true);
			calcFinalAmounts(chemEl, 'propan', true);
			calcFinalAmounts(chemEl, 'serovodorod', true);
			calcFinalAmounts(chemEl, 'sinkislota', true);
			calcFinalAmounts(chemEl, 'stirol', true);
			calcFinalAmounts(chemEl, 'toluol', true);
			calcFinalAmounts(chemEl, 'fenol', true);
			calcFinalAmounts(chemEl, 'formaldegid', true);
			calcFinalAmounts(chemEl, 'ftor', false);
			calcFinalAmounts(chemEl, 'ftorovodorod', false);
			calcFinalAmounts(chemEl, 'hlor', false);
			calcFinalAmounts(chemEl, 'hlorovodorod', false);
			calcFinalAmounts(chemEl, 'etan', true);
			calcFinalAmounts(chemEl, 'etanol', true);
			calcFinalAmounts(chemEl, 'etilen', true);

			function calcFinalAmounts (chemEl, chemElName, nkprStatus) {
					if ( $('#' + chemElName).prop('selected') ) {			
								
								if ( $('#ppm-radio').prop('checked') ) {
											 $('#ppm-amount').text( enteredAmount.val() );
											 $('#mg-m3-amount').text( enteredAmount.val() * chemEl[chemElName].ppm );	
											 $('#percent-vol-amount').text( enteredAmount.val() / 10000 );	
											 $('#nkpr-amount').text( $('#percent-vol-amount').text() * chemEl[chemElName].pv );					 
								}
								
								if ( $('#mg-m3-radio').prop('checked') ) {
											 $('#ppm-amount').text( enteredAmount.val() * chemEl[chemElName].mg );
											 $('#mg-m3-amount').text( enteredAmount.val() );									 
											 $('#percent-vol-amount').text( $('#ppm-amount').text() / 10000 );
											 $('#nkpr-amount').text( $('#percent-vol-amount').text() * chemEl[chemElName].pv );	
								}
								
								if ( $('#percent-vol-radio').prop('checked') ) {
												$('#ppm-amount').text( enteredAmount.val() * 10000 );
												$('#mg-m3-amount').text( $('#ppm-amount').text() * chemEl[chemElName].ppm );									 
												$('#percent-vol-amount').text( enteredAmount.val() );
												$('#nkpr-amount').text( $('#percent-vol-amount').text() * chemEl[chemElName].pv );	
								}

								if ( $('#nkpr-radio').prop('checked') ) {
											if (nkprStatus === false) {
															$('#nkpr-amount').text( '-' );
															$('#percent-vol-amount').text( '-' );
															$('#ppm-amount').text( '-' );
															$('#mg-m3-amount').text( '-' );	
											} else {
															$('#nkpr-amount').text( enteredAmount.val() );
															$('#percent-vol-amount').text( $('#nkpr-amount').text() / chemEl[chemElName].pv );
															$('#ppm-amount').text( $('#percent-vol-amount').text() * 10000 );
															$('#mg-m3-amount').text( $('#ppm-amount').text() * chemEl[chemElName].ppm );	
											}									
								}
					}
			}


		})







});