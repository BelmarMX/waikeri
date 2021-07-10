$(document).ready(function(e){
	let exchange = {
			usa_to_bol: 3245635.12
		,	usa_to_mex: 19.878958
		,	bol_to_usa: 0.00000030810611
		,	bol_to_mex: 0.000006125089
		,	mex_to_usa: 0.050304448
		,	mex_to_bol: 163262.93
	}


	if( document.querySelector('#simulator') )
	{
		$('#sim_quantity').on('keyup', function(e){
			calculate()
		})

		$('#sim_origin').on('change', function(e){
			let img = $(this).val()
			$('#origin_flag').attr('src', `img/${img}-flag.png`)
			// ----
			calculate()
		})
	
	
		$('#sim_destiny').on('change', function(e){
			let img = $(this).val()
			$('#destiny_flag').attr('src', `img/${img}-flag.png`)
			// ----
			calculate()
		})

		function calculate()
		{
			let quantity	= parseFloat($('#sim_quantity').val())
			let origin		= $('#sim_origin').val()
			let destiny		= $('#sim_destiny').val()
			let subtotal	= 0.00
			let comission	= 0.00
			let total		= 0.00
			let currency	= {
					usa: 'USD'
				,	mex: 'MXN'
				,	bol: 'VES'
			}
			
			if( origin == destiny)
			{
				subtotal = quantity
			}
			else
			{
				let change = exchange[origin+'_to_'+destiny];				currency[destiny]

				subtotal = quantity * change
			}

			comission = parseFloat(subtotal * .04)
			if( comission <= .01 || isNaN(comission) )
			{
				comission = .01;
			}
			total = parseFloat(subtotal - comission)
			if( total <= .01 || isNaN(total) )
			{
				total = 0.00;
			}

			$('#commision').html( comission.toFixed(2) + ` ${currency[destiny]}` )
			$('#total').html( total.toFixed(2) + ` ${currency[destiny]}`)
		}
	}
})