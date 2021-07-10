<div class="hero-form" id="simulator">
	<p class="text">Me gustaría transferir <small>(simulador)</small></p>
	<div id="step_one_container">
		<div class="courrency-select">
			<form action="#!" id="faq_form">
				<div class="form-group">
					<input
						id="sim_quantity"
						class="form-control"
						type="number"
						name="number"
						step="0.01"
						placeholder="00.00"
					>
				</div>
			</form>

			<div class="language-select">
			</div>
		</div>
		<p class="text">País de origen</p>
		<div class="country">
			<img id="origin_flag" src="{{ assets('img/mex-flag.png') }}" alt="COUNTRY FLAG">
			<div class="language-select">
				<select id="sim_origin" class="select-bar">
					<option value="mex">MEX (MXN)</option>
					<option value="usa">USA (USD)</option>
					<option value="bol">BOL (VES)</option>
				</select>
			</div>
		</div>

		<p class="text">País destino</p>
		<div class="country">
			<img id="destiny_flag" src="{{ assets('img/bol-flag.png') }}" alt="COUNTRY FLAG">
			<div class="language-select">
				<select id="sim_destiny" class="select-bar">
					<option value="bol">BOL (VES)</option>
					<option value="mex">MEX (MXN)</option>
					<option value="usa">USA (USD)</option>
				</select>
			</div>
		</div>

		<div id="step_one_preview">
			<div class="table-responsive">
				<table class="table">
					<tbody>
						<tr>
							<th colspan="2" class="text-start">Comisión 4%</th>
						</tr>
						<tr>
							<td id="origin_comission" class="text-end">
								$<span class="amount">0.00</span> <span class="currency">MXN</span>
							</td>
							<td id="destiny_comission" class="text-end">
								$<span class="amount">0.00</span> <span class="currency">VES</span>
							</td>
						</tr>
						<tr>
							<th colspan="2" class="text-start">Cantidad bien convertida</th>
						</tr>
						<tr>
							<td id="origin_total" class="text-end">
								$<span class="amount">0.00</span> <span class="currency">MXN</span>
							</td>
							<td id="destiny_total" class="text-end">
								$<span class="amount">0.00</span> <span class="currency">VES</span>
							</td>
						</tr>
					</tbody>
				</table>
				<small id="conversion_rate" class="d-block text-end">
					Cambio: 1.00 <span class="currency_origin">MXN</span> = <span class="equals_to">163262.93</span> <span class="currency_destiny">VES</span>
				</small>
			</div>
		</div>

		<a id="step_one" href="#" class="button button-1">
			Simular transferencia
		</a>
	</div>
	<div id="step_two_container" class="d-none">
		<span class="section-title">Indica tus datos</span>

		<form action="#!">
			<div class="form-group">
				<input
					id="sim_personal_nombre"
					class="form-control"
					type="text"
					placeholder="Nombre legal completo"
				>
			</div>
			<div class="form-group">
				<input
					id="sim_personal_apellidos"
					class="form-control"
					type="text"
					placeholder="Apellidos legales completos"
				>
			</div>
			<div class="form-group">
				<input
					id="sim_personal_nacimiento"
					class="form-control"
					type="date"
					placeholder="Fecha de nacimiento"
				>
			</div>
			<div class="form-group">
				<div class="language-select">
					<select id="sim_personal_lada" class="select-bar">
						<option value="+52">+52 México</option>
						<option value="+1">+1 USA</option>
						<option value="+58">+58 Venezuela</option>
					</select>
				</div>
				<input
					id="sim_personal_telefono"
					class="form-control"
					type="number"
					min="1000000000"
					max="9999999999"
					placeholder="Teléfono 10 dígitos"
				>
			</div>

			<span class="section-title">Domicilio</span>
			<div class="form-group">
				<input
					id="sim_personal_pais"
					class="form-control"
					type="text"
					placeholder="País"
				>
			</div>
			<div class="form-group">
				<input
					id="sim_personal_direccion"
					class="form-control"
					type="text"
					placeholder="Dirección"
				>
			</div>
			<div class="form-group">
				<input
					id="sim_personal_ciudad"
					class="form-control"
					type="text"
					placeholder="Ciudad"
				>
			</div>
			<div class="form-group">
				<input
					id="sim_personal_cp"
					class="form-control"
					type="number"
					min="10000"
					max="99999"
					placeholder="Código Postal"
				>
			</div>
		</form>

		<a id="step_two" href="#" class="button button-1">
			Siguiente
		</a>
	</div>
	<div id="step_three_container" class="d-none">
		<span class="section-title">Enviar a otra persona</span>

		<form action="#!">
			<div class="form-group">
				<input
					id="sim_beneficiario_correo"
					class="form-control"
					type="email"
					placeholder="Su correo electrónico (opcional)"
				>
			</div>
			<div class="form-group mb-5">
				<input
					id="sim_beneficiario_nombre"
					class="form-control"
					type="text"
					placeholder="Nombre completo del titular de la cuenta"
				>
			</div>
			<div class="form-group unbackgroundable">
				<input
					type="checkbox"
					checked
					disabled
				>
				<label class="label-white">Conozco sus datos bancarios</label>
			</div>
			<div class="form-group">
				<label class="label-white">Código de sucursal</label>
				<div class="language-select">
					<select class="select-bar">
						<option value="40">40</option>
					</select>
				</div>
				<div class="language-select">
					<select class="select-bar">
						<option value="40">30</option>
					</select>
				</div>
				<div class="language-select">
					<select class="select-bar">
						<option value="40">20</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="label-white" style="width: 275px;">Número de cuenta</label>
				<input
					class="form-control colored"
					type="number"
					value="1488729751"
					readonly
				>
			</div>
		</form>

		<a id="step_three" href="#" class="button button-1">
			Confirmar
		</a>
	</div>
	<div id="step_four_container" class="d-none">
		<div id="detalles_transferencia" class="table-responsive">
			<span class="section-title">Detalles de la transferencia</span>
			<table class="table">
				<tbody>
					<tr>
						<th>Tu envío</th>
						<td class="text-end"><span id="res_total_sent">0.00</span> <span class="res_origin_currency">MXN</span></td>
					</tr>
					<tr>
						<th>Total comisión</th>
						<td class="text-end">-<span id="res_comission">0.00</span> <span class="res_origin_currency">MXN</span></td>
					</tr>
					<tr>
						<th>Monto bien convertido</th>
						<td class="text-end"><span id="res_total_original">0.00</span> <span class="res_origin_currency">MXN</span></td>
					</tr>
					<tr>
						<th><span id="res_first_name_beneficiario">Beneficiario</span> recibirá</th>
						<td class="text-end"><span id="res_conversion">0.00</span> <span class="res_destiny_currency">VES</span></td>
					</tr>
					<tr>
						<th>Forma de envío</th>
						<td class="text-end">Express</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div id="detalles_recepcion" class="table-responsive">
			<span class="section-title">Detalles de recepción</span>
			<table class="table">
				<tbody>
					<tr>
						<th>Nombre</th>
						<td class="text-end" id="res_beneficiario_name"></td>
					</tr>
					<tr>
						<th>Email</th>
						<td class="text-end" id="res_beneficiario_email"></td>
					</tr>
					<tr>
						<th>IBAN</th>
						<td class="text-end">1488729751</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div id="detalles_recepcion" class="table-responsive">
			Escriba un mensaje para <span>Beneficiario<span>
			<textarea id="sim_beneficiario_mensaje" rows="3" cols="43" placeholder="Hola beneficiario, te he realizado una transferencia de $0.00 VES"></textarea>
		</div>

		<a id="step_four" href="#" class="button button-1">
			Reiniciar simulación
		</a>
	</div>
</div>