<template>
    <splide :options="options">
        <splide-slide>
            <img src="/images/slider/1.webp">
        </splide-slide>
        <splide-slide>
            <img src="/images/slider/2.webp">
        </splide-slide>
        <splide-slide>
            <img src="/images/slider/3.webp">
        </splide-slide>
    </splide>

</template>

<script>

import { Splide, SplideSlide } from '@splidejs/vue-splide';
import '@splidejs/splide/dist/css/themes/splide-default.min.css';
import '@splidejs/splide/dist/css/themes/splide-sea-green.min.css';
import '@splidejs/splide/dist/css/themes/splide-skyblue.min.css';


export default {
    name: "Slider",
    components: {
        Splide,
        SplideSlide,
    },
    data() {
        return {
            options: {
                type    : 'loop',
                perPage : 1,
                autoplay: true,
            },
        };
    },
}
</script>

<style scoped>

</style>
