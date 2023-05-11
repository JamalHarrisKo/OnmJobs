<template>
    <div class="content-container">
        <div class="logo_gallery" v-bind:class="{ negativeMarginTop: negativeMarginTop }">
            <div v-for="logo in logos">
                <div v-if="logo['attributes']['ext'] == '.svg'" class="logo_gallery__single">
                    <img :src="'http://localhost:1337' + logo['attributes']['url']">
                </div>
                <div v-if="logo['attributes']['ext'] == '.png'" class="logo_gallery__single">
                    <img :src="'http://localhost:1337' + logo['attributes']['formats']['thumbnail']['url']">
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.logo_gallery {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    margin-bottom: 5rem;
}

.logo_gallery__single {
    width: 200px;
    display: flex;
    justify-content: center;
    margin:2rem;
}

.logo_gallery__single img {
    width: 100%;
    height: auto;
}
</style>

<script>
export default {
    name: 'App',
    props: ['negativeMarginTop', 'logos'],
}
</script>