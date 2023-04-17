
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
.ul-benefits li::before {
 content: '\002B';
 font-weight: bold;
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