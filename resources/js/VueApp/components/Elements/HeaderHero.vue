<template>
    <div class="Header_Hero">
        <div class="hero_header__overlay">

        </div>
        <!-- <slot></slot> -->
        <div class="hero_header" v-bind:style="{ backgroundImage: 'url(http://localhost:1337' + backgroundImage + ')' }">
            <div class="hero_header__content">
                <h1 class="hero_header__main">
                    <slot name="Header"></slot>
                </h1>
                <h3 class="hero_header__sub">
                    <slot name="HeaderSub"></slot>
                </h3>
                <p class="hero_header__text">
                    <slot name="Text"></slot>
                </p>
            </div>
        </div>

    </div>
</template>


<script>

export default {
    name: 'App',
    props: ['backgroundImage', 'Header', 'HeaderSub'],
    data() {
        return {

        }

    },

    mounted() {

    }
}
</script>
<style>

</style>