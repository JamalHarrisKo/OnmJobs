<template>
 
        <div class="content-container">
            <ul class="ul">
                <p class="ul__header" v-if="contentHeader">{{ contentHeader }}</p>
                <li v-for="li in listItems">{{ li.ListItem }}</li>
            </ul>

        </div>
    
</template>
<style>
.ul {
    padding-left: 0;
    max-width: 800px;
    margin-bottom: 4rem;
    list-style: none;
}

.ul li {
    margin-bottom: 1rem;
    line-height: 1.5;
    display: flex;
}
.ul li::before {
 content: '\25CF';
 color: orange;
 display: block;
 padding-right: 0.5rem;
}

.ul__header {
    font-size: 1.2rem;
    font-weight: bold;
}
</style>
<script>
export default {
    name: 'list',
    props: ['listItems', 'contentHeader']
}
</script>