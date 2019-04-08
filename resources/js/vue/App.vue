<template>
	<div class="app">
		<page-home/>
		<page-whoarewe/>
		<page-contact/>
	</div>
</template>

<script>
	import $ from "jquery";

	export default {
		mounted() {
			$(window).scroll(function(event) {
				let max = 100;
				let scroll = Math.min(max, $(window).scrollTop() / 20);
				$("body").css("background-position-y", -scroll);

				let scrollTop = $(window).scrollTop();
				let windowHeight = $(window).height();

				$(".anim-in").each(function() {
					let elTop = $(this).offset().top;

					if (elTop + 150 <= scrollTop + windowHeight) {
						$(this).removeClass("anim-in");
						$(this).removeClass("hidden");
					}
				});
			});
		}
	};
</script>
