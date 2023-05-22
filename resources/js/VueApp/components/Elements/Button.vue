<template>
    <div class="content-container">
        <a class="onm-button" v-bind:class="{ negativeMarginTop: negativeMarginTop, alignCenter: alignCenter }"
            :href="href"> <slot name="text"></slot></a>
    </div>
</template>
<style>

</style>
<script>

export default {
    name: 'Button',
    props: ['negativeMarginTop', 'alignCenter', 'href'],
}
</script>