<script setup>
import PageHeadline from './PageHeadline.vue';
import PageContent from './PageContent.vue'
// import TextImage from './TextImage.vue'
</script>
<template>

        <!-- Problem repetetive code
    Problem differentiate page content inbetween pages
    Solution: add content attribute to the content call: 
  Also move The Company.vue content to homeView.vue -> even less repetitive code, since other views wont be ne
  needed
  -->
<PageContent pageContentID=pageContentID></PageContent> 
</template>

<script>
// import { onMounted } from 'vue';    seeContent()
// import axios from 'axios'

export default {
    name: 'App',
    props: ['pageContentID'],

    data() {
        return {
            //old 
            // header: {
            //     headerMain: 'ONM',
            //     headerSub: 'Kurze unterüberschrift test'
            // },
            
            //set default
            pageHeader : '',
            subHeader :'',
            // change header to array with id, to match multiple
            pageObject : [],
            testArray : []



        }

    },

    // mounted(){
    //     // downloaded npm package populate deep
    //     //docu
    //     axios.get('http://localhost:1337/api/pages/1/?populate=deep').then((response)=>{
    //         // this.pageHeader = response.data.data.attributes.PageContent[0].Hauptberschrift
    //         // this.subHeader = response.data.data.attributes.PageContent[0].subheader
    //         // // console.log(response.data.data.attributes.PageContent)
    //         // // alter fuck
    //         // this.pageObject = response.data.data.attributes.PageContent
    //         // this.pageObject.forEach(el => 
    //         // this.loadContent(el)
    //         // )     
    //         // this.logContent(this.testArray)
    //     }
    //     )
    
    // },
    // methods :{
    //     //get all contents from page object
    //     loadContent(el){
    //         this.testArray.push(el)
    //     },
    //     logContent(array){
    //         array.forEach(ele => console.log(ele))
    //     }
    // },  
}

</script>