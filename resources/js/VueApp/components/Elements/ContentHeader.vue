<template>
    <div class="content-container">
        <h3 class="content_header" v-bind:class="{ textAlignCenter: textAlignCenter }">
            <slot name="ContentHeader"></slot>
        </h3>
    </div>
</template>
<style>

</style>
<script>
export default {
    name: 'ContentHeader',
    props: ['textAlignCenter'],
}
</script>