<template>
    <div class="parallax"></div>
</template>

<script>
export default {
    name:'ParallaxComponent'
}
</script>

<style lang="scss" scoped>
    .parallax {
        /* The image used */
        background-image: url("/img/img rest/parallax.jpg");

        /* Set a specific height */
        min-height: 300px;

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
}



</style>
