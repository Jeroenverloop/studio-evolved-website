<template>
	<div class="contact">
		<div
			class="transition"
			v-for="(a,index) in test"
			:key="index"
			:style="{opacity: .5 - (0.5/test.length)*index}"
		/>
		<div class="container">
			<div class="content">
				<div class="company-data">
					<div class="title anim-in hidden">CONTACT</div>
					<div class="item anim-in hidden">
						<div class="icon">
							<img src="/img/contact/phone.svg">
						</div>
						<div class="data">
							<a href="tel:+31618213589">+31 6 215 545 96</a>
						</div>
					</div>
					<div class="item anim-in hidden">
						<div class="icon">
							<img src="/img/contact/website.svg">
						</div>
						<div class="data">
							<a href="https://www.studioevolved.nl">www.studioevolved.nl</a>
						</div>
					</div>
					<div class="item anim-in hidden">
						<div class="icon">
							<img src="/img/contact/location.svg">
						</div>
						<div class="data">
							<a
								href="https://www.google.com/maps/place/Europalaan+100,+3526+KS+Utrecht/@52.0642438,5.1064218,17z/data=!3m1!4b1!4m5!3m4!1s0x47c665eb85078021:0x6ff23b3d038f6957!8m2!3d52.0642438!4d5.1086105"
							>Europalaan 100, 3526 KS Utrecht</a>
						</div>
					</div>
					<div class="item anim-in hidden">
						<div class="icon">
							<img src="/img/contact/mail.svg">
						</div>
						<div class="data">
							<a href="mailto:info@studioevolved.nl">info@studioevolved.nl</a>
						</div>
					</div>
				</div>
				<div class="map anim-in hidden">
					<div id="map"/>
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
				test: [0, 0, 0, 0],
				info:
					"Wanneer je een mooie tekst op je pagina zet zal er veel veranderen in de vormgeving"
			};
		},

		mounted() {
			this.resizeMap();
			let lat = 52.0643;
			let long = 5.10858;
			var map = L.map("map").setView([lat, long], 18);
			L.tileLayer(
				"https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}",
				{
					attribution: "",
					maxZoom: 18,
					id: "mapbox.streets",
					accessToken:
						"pk.eyJ1IjoiamVyb2VudmVybG9vcCIsImEiOiJjanRoMTh5cjIwdDl4NGFycmNqb2theGk3In0.lT_uRMGshrIKCugYll9idw"
				}
			).addTo(map);
			L.marker([lat, long]).addTo(map);

			let self = this;
			$(window).resize(function() {
				self.resizeMap();
			});
		},

		methods: {
			resizeMap: function() {
				let width = $(".map").width();
				if ($(window).width() < 900) {
					$(".map").css("height", 300);
				} else $(".map").css("height", width);
			}
		}
	};
</script>
