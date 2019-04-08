<template>
	<div class="home">
		<div class="background"/>
		<layout-logo :out="false"/>

		<div class="scroll" @click="scrollPage">
			<div
				v-for="(a, index) in arrows"
				:key="index"
				class="arrow"
				:style="{ 'animation-delay': index * 0.2 + 's' }"
			/>
		</div>

		<div class="contact">
			<div class="items">
				<div class="item" :class="{ hidden: stage < 3 }">
					<a href="mailto:info@studioevolved.nl" class="icon">
						<img src="/img/social/mail.png">
					</a>
				</div>
				<div class="item" :class="{ hidden: stage < 4 }">
					<a href="tel:0621554596" class="icon">
						<img src="/img/social/phone.png">
					</a>
				</div>
				<div class="item" :class="{ hidden: stage < 5 }">
					<a
						href="https://www.google.com/maps/place/Europalaan+100,+3526+KS+Utrecht/@52.0642471,5.1064218,17z/data=!3m1!4b1!4m5!3m4!1s0x47c665eb85078021:0x6ff23b3d038f6957!8m2!3d52.0642438!4d5.1086105"
						class="icon"
						target="blank"
					>
						<img src="/img/social/location.png">
					</a>
				</div>
			</div>
			<div class="dracula"/>
		</div>
	</div>
</template>


<script>
	import $ from "jquery";

	export default {
		data() {
			return {
				stage: 0,
				arrows: [0, 0, 0, 0],
				currentArrow: 0,
				interval: null,
				draculaCurrent: 0,
				draculaTarget: 0
			};
		},

		methods: {
			scrollPage: function() {
				$("html, body").animate(
					{ scrollTop: $(".who-are-we").offset().top },
					500
				);
			}
		},

		mounted() {
			for (let i = 0; i < 10; i++) {
				setTimeout(() => {
					this.stage++;
				}, i * 250);
			}

			let self = this;

			$(document).scroll(function() {
				if ($(document).scrollTop() > 50) {
					$(".scroll").addClass("hidden");
				} else {
					$(".scroll").removeClass("hidden");
				}
				self.draculaTarget = $(document).scrollTop() / 50;
			});

			this.interval = setInterval(() => {
				this.currentArrow++;
				if (this.currentArrow >= this.arrows.length) {
					this.currentArrow = 0;
				}
			}, 100);

			setInterval(() => {
				this.draculaCurrent +=
					this.draculaTarget - this.draculaCurrent / 10;
				$(".dracula").css("background-position-y", this.draculaCurrent);
			}, 20);
		}
	};
</script>
