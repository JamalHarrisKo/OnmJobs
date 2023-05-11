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
.Sperator_Hero {
    color: white;
    position: relative;
    width: 100%;
    margin-bottom: 7rem;
}

.hero_seperator__main {
    margin-top: 0;
}

.hero_seperator__overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 0;
}

.hero_seperator {
    background-size: cover;
    min-height: 400px;
    display: flex;
    align-items: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    padding: 4rem 2rem;
}

.hero_seperator__content {
    widows: 100%;
    z-index: 100;
    position: relative;
    /* text-align: center; */
}

.hero_seperator__main {
    font-size: 3.5rem;
}

@media(max-width:576px) {
    .hero_seperator__main {
        font-size: 2.7rem;
    }
}

.hero_seperator__sub {
    font-size: 2rem;
}

@media(max-width:576px) {
    .hero_seperator__sub {
        font-size: 1.7rem;
    }
}

.hero_seperator__text {
    font-size: 1.1rem;
    width: 50%;
    line-height: 1.5;
}

@media(max-width:576px) {
    .hero_seperator__sub {
        font-size: 1.7rem;
    }

    .hero_seperator__text {
        font-size: 1rem;
    }
}

@media (max-width: 768px) {
    .hero_seperator__text {
        width: 100%;
    }
}
</style>

<script>
export default {
    name: 'SeperatorHero',
    props: ['imageSrc', 'textAlignCenter', 'headerMain', 'headerSub', 'text']
}

</script>