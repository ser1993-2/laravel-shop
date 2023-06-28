<template>

    <Slider/>

    <div class="row g-5">

        <SiteContent/>

        <Sidebar/>

    </div>
</template>

<script>

import Slider from "../layouts/Main/Slider.vue";
import SiteContent from "../layouts/Main/Content.vue";
import Sidebar from "../layouts/Main/Sidebar.vue";

export default {
    name: "Main",
    components: {
        Slider,
        SiteContent,
        Sidebar
    }
}
</script>

<style scoped>

</style>
