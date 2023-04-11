<template>
    <div class="content-container">
        <div class="content-container">
            <ul class="ul">
                <p class="ul__header" v-if="contentHeader">{{ contentHeader }}</p>
                <li v-for="li in listItems">{{ li['Listitem'] }}hello</li>
            </ul>

        </div>
    </div>
</template>
<style>
.ul {
    padding-left: 0;
    max-width: 800px;
    margin-bottom: 4rem;
}

.ul li {
    margin-bottom: 1rem;
    line-height: 1.3;
}

.ul__header {
    font-size: 1.2rem;
    /* font-weight: bold; */
}
</style>
<script>
export default {
    name: 'list',
    props: ['listItems', 'contentHeader']
}
</script>