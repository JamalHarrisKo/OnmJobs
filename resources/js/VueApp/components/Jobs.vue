<script setup>
import PageHeadline from './PageHeadline.vue';
</script>
<template>
    <PageHeadline>
        <template #heading>{{ pageHeader }}</template>
        <template #headingSubtext>{{ subHeader }}</template>
    </PageHeadline>
</template>

<script>
// import { onMounted } from 'vue';
import axios from 'axios'

export default {
    name: 'App',
    data() {
        return {
            //set default
            pageHeader : '',
            subHeader :''
        }
    },
    mounted(){
        axios.get('http://localhost:1337/api/pages/3/?populate=*').then((response)=>{
            this.pageHeader = response.data.data.attributes.PageContent[0].Hauptberschrift
            this.subHeader = response.data.data.attributes.PageContent[0].subheader

            // console.log(response.data.data.attributes.PageContent[0].Hauptberschrift)
        }
    )}
}
</script>