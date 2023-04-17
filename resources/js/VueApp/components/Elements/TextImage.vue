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
.text_image {
    display: flex;
    /* justify-content: space-between; and make it not 100% */
    margin-bottom: 7rem;
    justify-content: space-between;
}

.textImageLeft {
    flex-direction: row-reverse;
}

.text_image__text {
    width: 60%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-bottom: 0;
}

.text_image__image {
    width: 38%;
    display: flex;
    justify-content: center;
    margin-bottom: 0;
}

.text_image__image img {
    max-width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 10px;
}

.text_image__text__header {
    font-weight: bold;
    font-size: 1.5rem;
    color: #ff8c00;
    max-width: 60%;
    margin-top: 0;
}
</style>
<script>
export default {
    name: 'App',
    props: ['textImageLeft', 'imageSrc'],
}
</script>