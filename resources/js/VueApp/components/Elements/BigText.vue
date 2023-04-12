<template>
    <div class="content-container">
        <p class="big_text" v-bind:class="{ textAlignCenter: textAlignCenter, orange: orange, negativeMarginTop:reduceSpaceTop  }"><slot name="Text"></slot></p>
    </div>
</template>
<style>
.big_text{
    font-size: 2.5rem;
    margin-bottom: 5rem;
}
.orange{
    color: orange;
}
</style>
<script>
export default{
    name:'BigText',
    props:['textAlignCenter','orange', 'reduceSpaceTop']
}
</script>