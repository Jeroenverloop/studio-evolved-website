<template>
    <img src="img/Logo-white.png" class="logo hidden" />
</template>


<script>
import $ from "jquery";

export default {
    props: ["out"],

    data() {
        return {
            currentMouse: { x: 0, y: 0 },
            targetMouse: { x: 0, y: 0 },
            currentX: 0,
            targetX: 0
        };
    },

    mounted() {
        $(".logo").removeClass("hidden");

        this.currentMouse.x = window.innerWidth / 2;
        this.targetMouse.x = window.innerWidth / 2;
        this.currentMouse.y = window.innerHeight / 2;
        this.targetMouse.y = window.innerHeight / 2;
        this.currentX = $(document).scrollTop();
        this.targetX = $(document).scrollTop();

        let self = this;

        $(window).mousemove(function(event) {
            self.targetMouse.x = event.pageX;
            self.targetMouse.y = event.pageY - $(document).scrollTop();
        });

        setInterval(() => {
            self.targetX = $(document).scrollTop();
            if (!$(".logo").hasClass("out")) {
                if (self.targetX > window.innerHeight / 2 || self.out) {
                    $(".logo").addClass("out");
                }
            } else if (!self.out) {
                if (self.targetX < window.innerHeight / 2) {
                    $(".logo").removeClass("out");
                }
            }

            self.currentMouse.x +=
                (self.targetMouse.x - self.currentMouse.x) / 50;
            self.currentMouse.y +=
                (self.targetMouse.y - self.currentMouse.y) / 50;
            self.currentX += (self.targetX - self.currentX) / 10;

            let halfWidth = window.innerWidth / 2;
            let halfHeight = window.innerHeight / 2;

            let x = (halfWidth - self.currentMouse.x) / 30;
            let y = (halfHeight - self.currentMouse.y) / 30;
            let blur = Math.max(Math.abs(x), Math.abs(y)) / 12;

            let logoWidth = $(".logo").width();
            let logoHeight = $(".logo").height();

            let transformX = x - logoWidth / 2;
            let transformY = y - logoHeight / 2;
            transformY += self.currentX;

            $(".logo")
                .css(
                    "filter",
                    "drop-shadow(" +
                        -x +
                        "px " +
                        -y +
                        "px " +
                        blur * 4 +
                        "px rgba(0,0,0,0.3))"
                )
                .css(
                    "transform",
                    "translate(" +
                        transformX +
                        "px, " +
                        transformY +
                        "px) skew(" +
                        x / 20 +
                        "deg)"
                );
        }, 20);
    }
};
</script>
