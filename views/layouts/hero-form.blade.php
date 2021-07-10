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
			<span class="tag">Comisiones 4%:</span> $<span id="commision" class="amount">0.00</span>
			<br>
			<span class="tag">Transferencia:</span> $<span id="total" class="amount">0.00</span>
		</div>

		<a id="step_one" href="#" class="button button-1">
			Simular transferencia
		</a>
	</div>
	<div id="step_two_container" class="d-none">
		step2
	</div>
	<div id="step_three_container" class="d-none">
		step3
	</div>
	<div id="step_four_container" class="d-none">
		step4
	</div>
</div>