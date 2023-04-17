
<template>
    <div class="content-container">
        <div class="shortProile">
            <h3 class="shortProile__header">{{ Header }}</h3>
            <p class="shortProfile__text">{{ Text }}</p>
        </div>


    </div>
</template>
<style>
.shortProile {
    margin: 0 auto;
    margin-bottom: 7rem;
    text-align: center;
    max-width: 900px;
   
}

.shortProfile__text {}
</style>
<script>
export default {
    name: 'ShortProfile',
    props: ['Header', 'Text']
}
</script>