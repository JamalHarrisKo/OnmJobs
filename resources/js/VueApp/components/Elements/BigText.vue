<template>
    <div class="content-container">
        <p class="big_text" v-bind:class="{ textAlignCenter: textAlignCenter, orange: orange, negativeMarginTop:reduceSpaceTop  }"><slot name="Text"></slot></p>
    </div>
</template>
<style>

</style>
<script>
export default{
    name:'BigText',
    props:['textAlignCenter','orange', 'reduceSpaceTop']
}
</script>