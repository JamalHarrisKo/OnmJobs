<script setup>
import PageContent from '../components/PageContent.vue';
</script>

<template>
    <main>
        <PageContent :pageContentID=this.pageContentID></PageContent>
    </main>
</template>
<script>
export default {
    name: 'App',
    props: ['pageContentID'],
}
</script>