<template>
    <div class="content-container">
        <video  v-bind:class="{ negativeMarginTop: reduceSpaceTop }" class="contentVideo" autoplay controls loop muted>
            <source :src="'http://localhost:1337' + videoSource">
        </video>
    </div>
</template>
<style>

</style>
<script>
export default {
    name:'Video',
    props:['videoSource', 'reduceSpaceTop']
}
</script>