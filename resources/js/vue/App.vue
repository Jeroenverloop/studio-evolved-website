<template>
    <div class="page">
        <div class="container"></div>
        <layout-logo />
        <div class="scroll">
            <img src="/img/scroll_wit.png" />
        </div>
    </div>
</template>

<script>
import $ from "jquery";

export default {
    mounted() {
        $(window).scroll(function(event) {
            let max = 100;
            let scroll = Math.min(max, $(window).scrollTop());
            $("body").css("background-position-y", scroll);
        });
    }
};
</script>
