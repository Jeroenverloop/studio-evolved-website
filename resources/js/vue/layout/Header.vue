<template>
    <nav class="navigation">
        <img src="img/Logo-white.png" class="logo" />
        <!--
        <div class="menu">
            <div class="menu-item">
                <span>Home</span>
            </div>
            <div class="menu-item">
                <span>Wat we doen</span>
            </div>
            <div class="menu-item">
                <span>Voor wie</span>
            </div>
            <div class="menu-item">
                <span>Over ons</span>
            </div>
            <div class="menu-item">
                <span>Werken bij</span>
            </div>
            <div class="menu-item last">
                <span>Contact</span>
            </div>
        </div>
        <div style="clear:both"></div>
        -->
    </nav>
</template>


<script>
import $ from "jquery";

export default {
    mounted() {
        $(".menu-item").each(function(index) {
            for (let i = 0; i < 6; i++) {
                let block = $('<div class="block"></div>');
                block.css("opacity", 0);
                $(this).prepend(block);
            }
        });
    }
};
</script>
