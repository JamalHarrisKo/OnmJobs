<template>
    <div class="Sperator_Hero">
        <div class="hero_seperator__overlay">
        </div>
        <div class="hero_seperator" v-bind:style="{ backgroundImage: 'url(http://localhost:1337' + imageSrc + ')' }">
            <div class="content-container">
                <div class="hero_seperator__content" v-bind:class="{ textAlignCenter: textAlignCenter }">
                    <h1 v-if="headerMain" class="hero_seperator__main">{{ headerMain }}
                    </h1>
                    <h3 v-if="headerSub" class="hero_seperator__sub">{{ headerSub }}</h3>
                    <div v-if="text" class="hero_seperator__text"> {{ text }}</div>
                </div>
            </div>
        </div>

    </div>
</template>


<style>

</style>

<script>
export default {
    name: 'SeperatorHero',
    props: ['imageSrc', 'textAlignCenter', 'headerMain', 'headerSub', 'text']
}

</script>