
<template>
    <div class="content-container">
        <div class="shortProfile">
            <h3 class="shortProfile__header">{{ Header }}</h3>
            <p class="shortProfile__text">{{ Text }}</p>
        </div>


    </div>
</template>
<style>


</style>
<script>
export default {
    name: 'ShortProfile',
    props: ['Header', 'Text']
}
</script>