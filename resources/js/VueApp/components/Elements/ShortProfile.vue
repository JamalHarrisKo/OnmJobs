
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
    margin-bottom: 7rem;
}
.shortProfile__text{
max-width: 900px;
}
</style>
<script>
export default {
name:'ShortProfile',
props:['Header', 'Text']
}
</script>