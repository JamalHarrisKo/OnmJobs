
<template>
    <div class="content-container">
        <div class="benefits">
            <h3 class="benefits__header">{{ Header }}</h3>
            <ul class="ul">
                <li v-for="benefit in Benefits"> {{ benefit.ListItem }}</li>
            </ul>
        </div>
    </div>
</template>
<style>
.benefits{
    margin-bottom: 6rem;
}
.ul {
    padding-left: 0;
    max-width: 800px;
    list-style: none;
}

.ul li {
    margin-bottom: 1rem;
    line-height: 1.5;
    display: flex;
}
.ul li::before {
 content: '\25CF';
 color: #ff8c00;
 display: block;
 padding-right: 0.5rem;
}
</style>
<script>
export default {
name:'ShortProfile',
props:['Header', 'Benefits']
}
</script>