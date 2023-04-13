<template>
    <div class="content-container">
        <a class="onm-button" v-bind:class="{ negativeMarginTop: negativeMarginTop, alignCenter: alignCenter }"
            :href="href"> <slot name="text"></slot></a>
    </div>
</template>
<style>
.onm-button {
    display: block;
    width: fit-content;
    text-decoration: none;
    padding: 1rem 2rem;
    border: 2px solid black;
    color: black;
    border-radius: 5px;
    margin-bottom: 7rem;

}
</style>
<script>

export default {
    name: 'Button',
    props: ['negativeMarginTop', 'alignCenter', 'href'],
}
</script>