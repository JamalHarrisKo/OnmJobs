<template>
    <div class="Sperator_Hero">
        <div class="hero_seperator__overlay">
        </div>
        <div class="hero_seperator"
            v-bind:style="{ backgroundImage: 'url(http://localhost:1337' + imageSrc + ')' }">
            <div class="content-container">
                <div class="hero_seperator__content" v-bind:class="{ textAlignCenter: textAlignCenter }">
                    <h1 v-if="headerMain" class="hero_seperator__main">{{headerMain}}
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
    height: 600px;
    max-height: 100vh;
    display: flex;
    align-items: center;
    ;
    /* background-position: center; */
    background-repeat: no-repeat;
    background-attachment: fixed;

    /* justify-content: center;
        align-items: center; */
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

.hero_seperator__sub {
    font-size: 2rem;
}

.hero_seperator__text {
    font-size: 1.2rem;
    max-width: 50%;
}</style>

<script>
export default {
    name:'SeperatorHero',
    props:['imageSrc', 'textAlignCenter', 'headerMain', 'headerSub', 'text']
}

</script>