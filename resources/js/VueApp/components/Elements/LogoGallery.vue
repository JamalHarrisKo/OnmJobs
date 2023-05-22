<template>
    <div class="content-container">
        <div class="logo_gallery" v-bind:class="{ negativeMarginTop: negativeMarginTop }">

            <div v-for="logo in logoLinks">
                <a v-if="logo.URL" :href="logo['URL']" target="_blank">
                    <div v-if="logo['Logo']['data']['attributes']['ext'] == '.svg'" class="logo_gallery__single">
                        <img :src="'http://localhost:1337' + logo['Logo']['data']['attributes']['url']">
                    </div>
                    <div v-else class="logo_gallery__single">
                        <img
                            :src="'http://localhost:1337' + logo['Logo']['data']['attributes']['formats']['thumbnail']['url']">
                    </div>
                </a>
                <div v-else>
                    <div v-if="logo['Logo']['data']['attributes']['ext'] == '.svg'" class="logo_gallery__single">
                        <img :src="'http://localhost:1337' + logo['Logo']['data']['attributes']['url']">
                    </div>
                    <div v-else class="logo_gallery__single">
                        <img
                            :src="'http://localhost:1337' + logo['Logo']['data']['attributes']['formats']['thumbnail']['url']">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style></style>

<script>
export default {
    name: 'App',
    props: ['negativeMarginTop', 'logos', 'logoLinks'],
}
</script>