<template>
    <div class="home" style="height: 100vh">
        <layout-logo :out="false" />

        <img
            src="/img/construction.png"
            class="construction-img"
            :class="{ hidden: stage < 7 }"
        />
        <div class="text" :class="{ hidden: stage < 7 }">
            Onze website is momenteel in ontwikkeling en zal spoedig weer online
            zijn!
        </div>

        <div class="contact" :class="{ hidden: stage < 3 }">
            <div class="item">
                <a href="mailto:info@studioevolved.nl" class="icon">
                    <img src="/img/social/mail.png" />
                </a>
            </div>
            <div class="item">
                <a href="tel:0621554596" class="icon">
                    <img src="/img/social/phone.png" />
                </a>
            </div>
            <div class="item">
                <a
                    href="https://www.google.com/maps/place/Europalaan+100,+3526+KS+Utrecht/@52.0642471,5.1064218,17z/data=!3m1!4b1!4m5!3m4!1s0x47c665eb85078021:0x6ff23b3d038f6957!8m2!3d52.0642438!4d5.1086105"
                    class="icon"
                    target="blank"
                >
                    <img src="/img/social/location.png" />
                </a>
            </div>
        </div>
    </div>
</template>


<script>
import $ from "jquery";

export default {
    data() {
        return {
            stage: 0
        };
    },

    mounted() {
        for (let i = 0; i < 10; i++) {
            setTimeout(() => {
                this.stage++;
            }, i * 250);
        }
    }
};
</script>
