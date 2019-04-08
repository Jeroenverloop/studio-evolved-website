<template>
	<div class="who-are-we">
		<div class="container">
			<div class="content-mobile">
				<div class="title">
					<span>WIE WIJ</span>
					<span class="bold">ZIJN</span>
				</div>
				<div class="paragraph">
					<span v-html="info"></span>
				</div>
			</div>

			<div class="employees">
				<div class="employee">
					<div class="portrait anim-in hidden" style="animation-delay: .1s">
						<img src="/img/portrait/1.svg">
					</div>
					<div class="info anim-in hidden" style="animation-delay: .1s">
						<div class="name">Tommie Wildschut</div>
						<div class="description">CEO | Lead grafisch</div>
					</div>
				</div>
				<div class="employee">
					<div class="portrait anim-in hidden" style="animation-delay: .2s">
						<img src="/img/portrait/2.svg">
					</div>
					<div class="info anim-in hidden" style="animation-delay: .2s">
						<div class="name">Jeroen Verloop</div>
						<div class="description">CTO | Lead developer</div>
					</div>
				</div>
				<div class="employee">
					<div class="portrait anim-in hidden" style="animation-delay: .3s">
						<img src="/img/portrait/3.svg">
					</div>
					<div class="info anim-in hidden" style="animation-delay: .3s">
						<div class="name">Wybe Grovestins</div>
						<div class="description">COO | Project manager</div>
					</div>
				</div>
				<div class="employee">
					<div class="portrait anim-in hidden" style="animation-delay: .4s">
						<img src="/img/portrait/4.svg">
					</div>
					<div class="info anim-in hidden" style="animation-delay: .4s">
						<div class="name">Jasper Lucijanic</div>
						<div class="description">Grafisch vormgever</div>
					</div>
				</div>
			</div>
			<div class="content">
				<div class="page-image anim-in hidden">
					<img src="/img/Wie_wij_zijn.svg">
				</div>
				<div class="text">
					<div class="title anim-in hidden">
						<span>LEER</span>
						<span class="bold">OPLOSSINGEN</span>
					</div>
					<div class="paragraph anim-in hidden">
						<span v-html="info"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>


<script>
	import $ from "jquery";

	export default {
		data() {
			return {
				info:
					"Wanneer je een mooie tekst op je pagina zet zal er veel veranderen in de vormgeving. Wanneer je een mooie tekst op je pagina zet zal er veel veranderen in de vormgeving. Wanneer je een mooie tekst op je pagina zet zal er veel veranderen in de vormgeving. Wanneer je een mooie tekst op je pagina zet zal er veel veranderen in de vormgeving."
			};
		}
	};
</script>
