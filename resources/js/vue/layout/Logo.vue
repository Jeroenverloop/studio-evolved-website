<template>
    <div class="logo-container">
        <img src="img/Logo-white.png" class="logo hidden" />
    </div>
</template>


<script>
import $ from "jquery";

export default {
    data() {
        return {
            currentMouse: { x: 0, y: 0 },
            targetMouse: { x: 0, y: 0 }
        };
    },

    mounted() {
        $(".logo").removeClass("hidden");

        this.currentMouse.x = window.innerWidth / 2;
        this.targetMouse.x = window.innerWidth / 2;
        this.currentMouse.y = window.innerHeight / 2;
        this.targetMouse.y = window.innerHeight / 2;

        let self = this;

        $(document).mousemove(function(event) {
            self.targetMouse.x = event.pageX;
            self.targetMouse.y = event.pageY;
        });

        setInterval(() => {
            self.currentMouse.x +=
                (self.targetMouse.x - self.currentMouse.x) / 50;
            self.currentMouse.y +=
                (self.targetMouse.y - self.currentMouse.y) / 50;

            let halfWidth = window.innerWidth / 2;
            let halfHeight = window.innerHeight / 2;

            let x = (halfWidth - self.currentMouse.x) / 30;
            let y = (halfHeight - self.currentMouse.y) / 30;
            let blur = Math.max(Math.abs(x), Math.abs(y)) / 12;

            $(".logo-container")
                .css("transform", "translate(" + x + "px , " + y + "px)")
                .css("filter", "blur(" + blur * 0 + "px)");
            $(".logo").css(
                "filter",
                "drop-shadow(" +
                    -x +
                    "px " +
                    -y +
                    "px " +
                    blur * 4 +
                    "px rgba(0,0,0,0.3))"
            );
        }, 20);
    }
};
</script>
