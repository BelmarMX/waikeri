$(document).ready(function(e){
	let exchange = {
			usa_to_ven: 3245635.12
		,	usa_to_mex: 19.878958
		,	ven_to_usa: 0.00000030810611
		,	ven_to_mex: 0.000006125089
		,	mex_to_usa: 0.050304448
		,	mex_to_ven: 163262.93
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

		$('#step_one').on('click', function(e){
			$('#step_one_container').addClass('d-none')
			$('#step_two_container').removeClass('d-none')
			$('#step_three_container').addClass('d-none')
			$('#step_four_container').addClass('d-none')
		})
		$('#step_two').on('click', function(e){
			$('#step_one_container').addClass('d-none')
			$('#step_two_container').addClass('d-none')
			$('#step_three_container').removeClass('d-none')
			$('#step_four_container').addClass('d-none')
		})
		$('#step_three').on('click', function(e){
			fill_four_step()
			$('#step_one_container').addClass('d-none')
			$('#step_two_container').addClass('d-none')
			$('#step_three_container').addClass('d-none')
			$('#step_four_container').removeClass('d-none')
		})
		$('#step_four').on('click', function(e){
			reset()
			$('#step_one_container').removeClass('d-none')
			$('#step_two_container').addClass('d-none')
			$('#step_three_container').addClass('d-none')
			$('#step_four_container').addClass('d-none')
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
				,	ven: 'VES'
			}

			if( isNaN(quantity) )
			{
				quantity = 0.00
			}
			
			let change		= 1
			if( origin != destiny )
			{
				change		= exchange[origin+'_to_'+destiny]
			} 
			subtotal		= quantity * change

			comission_origin	= parseFloat(quantity * 0.04)
			comission_destiny	= parseFloat(subtotal * 0.04)
			total_origin		= parseFloat(quantity - comission_origin)
			total_destiny		= parseFloat(subtotal - comission_destiny)

			if( isNaN(comission_origin) )
			{
				comission_origin = 0.00
			}
			if( isNaN(comission_destiny) )
			{
				comission_destiny = 0.00
			}
			if( isNaN(total_origin) )
			{
				total_origin = 0.00
			}
			if( isNaN(total_destiny) )
			{
				total_destiny = 0.00
			}
			
			$('#origin_comission .amount').html( format_number(comission_origin) )
			$('#origin_comission .currency').html( currency[origin] )
			$('#destiny_comission .amount').html( format_number(comission_destiny) )
			$('#destiny_comission .currency').html( currency[destiny] )

			$('#origin_total .amount').html( format_number(total_origin) )
			$('#origin_total .currency').html( currency[origin] )
			$('#destiny_total .amount').html( format_number(total_destiny) )
			$('#destiny_total .currency').html( currency[destiny] )

			$('#conversion_rate .currency_destiny').html( currency[destiny] )
			$('#conversion_rate .currency_origin').html( currency[origin] )
			$('#conversion_rate .equals_to').html( format_number(change, 6) )

			return {
					quantity
				,	comission_origin
				,	comission_destiny
				,	total_origin
				,	total_destiny
				,	currency_origin: currency[origin]
				,	currency_destiny: currency[destiny]
			}

		}

		function reset()
		{
			$('#sim_quantity').val(0.00)
			$('#sim_origin').val('mex').change()
			$('#sim_origin').parent('.language-select').find('.current').text('MEX (MXN)')
			$('#sim_destiny').val('ven').change()
			$('#sim_destiny').parent('.language-select').find('.current').text('VEN (VES)')

			$('#origin_comission .amount').html( 0.00 )
			$('#origin_comission .currency').html( 'MXN' )
			$('#destiny_comission .amount').html( 0.00 )
			$('#destiny_comission .currency').html( 'VES' )

			$('#origin_total .amount').html( 0.00 )
			$('#origin_total .currency').html( 'MXN' )
			$('#destiny_total .amount').html( 0.00 )
			$('#destiny_total .currency').html( 'VES' )

			$('#conversion_rate .currency_origin').html( 'MXN' )
			$('#conversion_rate .currency_destiny').html( 'VES' )
			$('#conversion_rate .equals_to').html( 163262.93 )
		}

		function fill_four_step()
		{
			amounts 				= calculate()
			let mail_beneficiario	= $('#sim_beneficiario_correo').val()
			let name_beneficiario	= $('#sim_beneficiario_nombre').val()
			let beneficiario_name	= name_beneficiario.split(" ")[0]
			let sucursal_code		= 403020
			let account_number		= 1488729751
			let message				= `Hola ${beneficiario_name}, te he realizado una transferencia de $${ format_number(amounts.total_destiny)} ${amounts.currency_destiny}`


			$('#res_total_sent').html( format_number(amounts.quantity) )
			$('#res_comission').html( format_number(amounts.comission_origin) )
			$('#res_total_original').html( format_number(amounts.total_origin) )
			$('#res_conversion').html( format_number(amounts.total_destiny) )
			$('.res_origin_currency').html(amounts.currency_origin)
			$('.res_destiny_currency').html(amounts.currency_destiny)
			$('#res_first_name_beneficiario').html(beneficiario_name)
			$('#res_beneficiario_name').html(name_beneficiario)
			$('#res_beneficiario_email').html(mail_beneficiario)
			$('#sim_beneficiario_mensaje').attr('placeholder', message)
		}

		function format_number( number )
		{
			console.log('reformatting')
			return number.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',')
		}
	}
})