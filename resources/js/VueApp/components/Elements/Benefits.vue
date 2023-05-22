
<template>
    <div class="content-container">
        <div class="benefits">
            <h3 class="benefits__header">{{ Header }}</h3>
            <ul class="ul ul-benefits">
                <li v-for="benefit in Benefits"> {{ benefit.ListItem }}</li>
            </ul>
        </div>
    </div>
</template>
<style>

</style>
<script>
export default {
name:'ShortProfile',
props:['Header', 'Benefits']
}
</script>