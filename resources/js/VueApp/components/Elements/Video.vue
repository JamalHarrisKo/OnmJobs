<template>
    <div class="content-container">
        <video class="contentVideo" autoplay controls loop muted>
            <source :src="'http://localhost:1337' + videoSource">
        </video>
    </div>
</template>
<style>
.contentVideo{
    width: 100%;
    border-radius: 30px;
    
    margin-bottom: 5rem;
}
</style>
<script>
export default {
    name:'Video',
    props:['videoSource']
}
</script>