<template>
    <div class="app">
        <page-home />
        <page-whoarewe />
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
        });
    }
};
</script>
