<!-- import content types -->
<script setup>
import PageHeadline from './PageHeadline.vue';
import TextImage from './TextImage.vue'
import Form from './Form.vue'

// import TextImage from './TextImage.vue'
</script>
<template>
    <div class="pageContent">
        <!-- <slot name="pageContent"></slot> -->
        <!-- <div>{{ ContentArray }}</div> -->
        <div class="pageContent__single" v-for="content in ContentArray">
            <!-- {{ content }} -->
            <div v-if="content['__component'] == 'text.page-header'">
                <PageHeadline>
                    <template #heading>{{ content['HeaderMain'] }}</template>
                    <template #headingSubtext>{{ content['HeaderSub'] }}</template>
                </PageHeadline>
            </div>
            <div v-if="content['__component'] == 'text.text-image'">
                <!-- {{ content }} -->
                <TextImage>
                    <p>{{ content["Text"] }}</p>
                    <img :src="'http://localhost:1337'+content['Image']['data']['attributes']['formats']['medium']['url']">
            
                    <!-- {{ content['Bild']['data']['attributes']['formats']['medium']['url'] }} -->
            </TextImage>
        </div>
        <div v-if="content['__component'] == 'formulare.formular' && content['Formular'][0] == ['Formular 1'] ">
                <!-- {{ content }} -->
                <Form></Form>
        </div>
            
        </div>

    <!-- render list of all components HERE -->
    <!-- components
        foreach 
        if type = xy
            print type xy
                        end if
                        if type = ab
                            print type ab 
                        end if
                        end foreach 
                    -->
    </div>
</template>

<!-- get PageContents -->
<script>
// import { onMounted } from 'vue';    seeContent()
import axios from 'axios'

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
            pageHeader: '',
            subHeader: '',
            // change header to array with id, to match multiple

            pageObject: [],
            ContentArray: [],
            TextImage_Text: [],
            TextImage_Image: [],
            //add data source url to create dynamic link to pass to axios.get function
            dataSrcURL: 'http://localhost:1337/api/pages/'+this.pageContentID+'/?populate=deep'
            
        

        }

    },

    mounted() {
        // downloaded npm package populate deep
        //docu
        axios.get(this.dataSrcURL).then((response) => {
            // this.pageHeader = response.data.data.attributes.PageContent[0].Hauptberschrift
            // this.subHeader = response.data.data.attributes.PageContent[0].subheader
            // console.log(response.data.data.attributes.PageContent)
            // alter fuck
            this.pageObject = response.data.data.attributes.PageContent
            this.pageObject.forEach(el =>
                // console.log(this.el),
                //if element __component type is xy
                // this xy = xy.value


                this.loadContent(el)
            )
            // this.pageObject.forEach(el =>
            //     this.prepareContent(el)
            // )
            this.logContent(this.ContentArray)
        }
        )
    },
    methods: {
        //get all contents from page object
        loadContent(el) {
            this.ContentArray.push(el)
        },
        logContent(array) {
            // array.forEach(ele => console.log(ele))
        },
        // prepareContent(el) {
        //     if (el['__component'] == 'text.seiten-ueberschrift') {
        //         // push as value and id instead
        //         // // lol not
        //         // this.pageHeader = el.Hauptberschrift
        //         // this.subHeader = el.subheader
        //     }
        // }

    },
    //make this dynamic for less repetetive code:
}

</script>