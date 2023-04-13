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
.Header_Hero {
    color: white;
    position: relative;
}

.hero_header__overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 0;
}

.hero_header {
    background-size: cover;
    height: 900px;
    max-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    margin-bottom: 7rem;


}

.hero_header__content {
    z-index: 100;
    position: relative;
    text-align: center;
}

.hero_header__main {
    font-size: 3.5rem;
}

.hero_header__sub {
    font-size: 2rem;
    margin-bottom: 1rem;
}</style>