<template>
    <div class="content-container">
        <div class="TextImage">
            <div class="text_image" v-bind:class="{ textImageLeft: textImageLeft }">
                <div class="text_image__text">
                    <h5 class="text_image__text__header">
                        <slot name="Header"></slot>
                    </h5>
                    <p>
                        <slot name="Text"></slot>
                    </p>
                </div>
                <div class="text_image__image">
                    <img :src="'http://localhost:1337' + imageSrc">
                </div>
            </div>
        </div>
    </div>
</template>


<style>

</style>
<script>
export default {
    name: 'App',
    props: ['textImageLeft', 'imageSrc'],
}
</script>