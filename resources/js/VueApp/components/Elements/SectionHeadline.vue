<template>
    <div class="content-container">
        <slot></slot>
        <div class="sectionHeader">
            <h3 class="sectionHeader__header">
                <slot name="HeaderMain"></slot>
            </h3>
            <h4 class="sectionHeader__headerSub">
                <slot name="HeaderSub"></slot>
            </h4>
            <p class="sectionHeader__text">
                <slot name="Text"></slot>
            </p>
        </div>
    </div>
</template>

<style scoped>

</style>
<script>
export default {
    name: 'SectionHeader',
    props: ['']
}
</script>