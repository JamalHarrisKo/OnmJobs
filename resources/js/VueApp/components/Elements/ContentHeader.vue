<template>
    <div class="content-container">
        <h3 class="content_header" v-bind:class="{ textAlignCenter: textAlignCenter }">
            <slot name="ContentHeader"></slot>
        </h3>
    </div>
</template>
<style>
.content_header {
    font-size: 2rem;
    margin-bottom: 3rem;
}
</style>
<script>
export default {
    name: 'ContentHeader',
    props: ['textAlignCenter'],
}
</script>