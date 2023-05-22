<template>
 
        <div class="content-container">
            <ul class="ul">
                <h5 class="ul__header" v-if="contentHeader">{{ contentHeader }}</h5>
                <li v-for="li in listItems">{{ li.ListItem }}</li>
            </ul>

        </div>
    
</template>
<style>

</style>
<script>
export default {
    name: 'list',
    props: ['listItems', 'contentHeader']
}
</script>