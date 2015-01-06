<section class="wrapper style1 container special-alt shadow1" style="width:100%;">
	<center><h2>Conoce nuestras instalaciones</h2></center>
	<div class="row">
		<div class="12u">
			<section>
				<h2></h2>
				<div class="slider has-dots" style="overflow: hidden; width: 100%; height: 415px;">
					<ul style="width: 400%; position: relative; left: 0%; height: 415px;">
						<li style="width: 25%; background-image: url(http://unslider.com/img/sunset.jpg); background-size: 100% 100%;">
							<h1>The jQuery slider that just slides.</h1>
							<p>No fancy effects or unnecessary markup, and it’s less than 3kb.</p>
							
							<a class="btn scrolly" href="#info">¿Qué es CBTa?</a>
						</li>
						
						<li style="width: 25%; background-image: url(http://unslider.com/img/wood.jpg); background-size: 100% 100%;">
							<h1>Fluid, flexible, fantastically minimal.</h1>
							<p>Use any HTML in your slides, extend with CSS. You have full control.</p>
							
							<a class="btn scrolly" href="#info">Información</a>
						</li>
						
						<li style="width: 25%; background-image: url(http://unslider.com/img/subway.jpg); background-size: 100% 100%;">
							<h1>Open-source.</h1>
							<p>Everything to do with Unslider is hosted on GitHub.</p>
							
							<a class="btn scrolly" href="#cta">Contacto</a>
						</li>
						
						<li style="width: 25%; background-image: url(http://unslider.com/img/shop.jpg); background-size: 100% 100%;">
							<h1>Uh, that’s about it.</h1>
							<p>I just wanted to show you another slide.</p>							
							<a class="btn scrolly" href="#info">Dime más</a>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
</section>
<section id="info" class="wrapper style1 container special-alt">
	<div class="row">
		<div class="12u">
			<center>
				<h2>
					<br><br>
					¿Qué es C.B.T.a.?
				</h2>
			</center>
			<section>
				<p>
					C.B.T.a. es el acrónimo de Centro de Bachillerato Tecnológico Agropecuario 
					establecido en México a través de la la DGETA (Dirección General de 
					Educación Tecnológica Agropecuaria) la cual es dependiente adscrita de 
					la SEMS (Subsecretaría de Educación Media Superior), que a su vez depende 
					de la SEP (Secretaría de Educación Pública). Existen 284 planteles de CBTA 
					que cuentan con bachillerato además de 18 carreras técnicas distintas.
				</p>
			</section>
		</div>
	</div>
</section>

<script type="text/javascript">
$(document).ready(function(){

	$('.slider').unslider({
		speed: 500,               //  The speed to animate each slide (in milliseconds)
		delay: 2000,              //  The delay between slide animations (in milliseconds)
		keys: true,               //  Enable keyboard (left, right) arrow shortcuts
		dots: true,              //  Display dot navigation
		fluid: true              //  Support responsive design. May break non-responsive designs
	});

});
</script>

