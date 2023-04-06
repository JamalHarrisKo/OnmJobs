<!-- import content types -->
<script setup>
import SectionHeader from './Elements/SectionHeadline.vue';
import TextImage from './Elements/TextImage.vue'
import Form from './Form.vue'
import HeaderHero from './Elements/HeaderHero.vue'
import SeperatorHero from './Elements/SeperatorHero.vue'

import LogoGallery from './Elements/LogoGallery.vue'
import Button from './Elements/Button.vue'
import FlipCards from './Elements/FlipCards.vue'
import List from './Elements/List.vue'
import BigText from './Elements/BigText.vue'
import Text from './Elements/Text.vue'
import JobList from './Elements/JobOfferList.vue'
import JobImageList from './Elements/JobImageList.vue'
import ContentHeader from './Elements/ContentHeader.vue'



// import TextImage from './TextImage.vue'
</script>
<template>
    <div class="pageContent">
        <!-- <slot name="pageContent"></slot> -->
        <!-- <div>{{ ContentArray }}</div> -->
        <!-- {{ ContentArray }} -->
        <div class="pageContent__single" v-for="content in ContentArray">
            <div v-if="content['__component'] == 'heros.hero'">
                <HeaderHero :background-image="content['backgroundImage']['data']['attributes']['formats']['large']['url']">
                    <template #Header>{{ content['Header'] }}</template>
                    <template #HeaderSub>{{ content['HeaderSub'] }}</template>
                </HeaderHero>

            </div>
            <div v-if="content['__component'] == 'text.page-header'">
                <SectionHeader>
                    <template #HeaderMain>{{ content['HeaderMain'] }}</template>
                    <template #HeaderSub>{{ content['HeaderSub'] }}</template>
                    <template #Text>{{ content['Text'] }}</template>
                </SectionHeader>
            </div>
            <div v-if="content['__component'] == 'text.content-header'">

                <ContentHeader :textAlignCenter="content['alingCenter']">
                    <template #ContentHeader>{{ content['ContentHeader'] }}</template>
                </ContentHeader>

            </div>
            <div v-if="content['__component'] == 'gallery.logo-gallery'">
                <!-- {{ content }} -->
                <LogoGallery>
                    <div class="logo_gallery" v-bind:class="{ negativeMarginTop: content['reduceSpaceTop'] }">
                        <div v-for="logo in content['Logos']['data']">
                            <div v-if="logo['attributes']['ext'] == '.svg'" class="logo_gallery__single">
                                <img :src="'http://localhost:1337' + logo['attributes']['url']">
                            </div>
                            <div v-if="logo['attributes']['ext'] == '.png'" class="logo_gallery__single">
                                <img :src="'http://localhost:1337' + logo['attributes']['formats']['thumbnail']['url']">
                            </div>
                        </div>
                    </div>

                    <!-- {{ content['Bild']['data']['attributes']['formats']['medium']['url'] }} -->
                </LogoGallery>
            </div>
            <div v-if="content['__component'] == 'links.button'">
                <!-- {{ content }} -->
                <Button>

                    <a class="onm-button"
                        v-bind:class="{ negativeMarginTop: content['reduceSpaceTop'], alignCenter: content['center'] }"
                        :href="content['URL']">{{ content['Text'] }}</a>
                    <!-- {{ content['Bild']['data']['attributes']['formats']['medium']['url'] }} -->
                </Button>
            </div>

            <div v-if="content['__component'] == 'text.text-image'">
                <!-- {{ content }} -->

                <TextImage>
                    <div class="text_image" v-bind:class="{ textImageLeft: content['imgLeft'] }">
                        <div class="text_image__text">
                            <h5 class="text_image__text__header">{{ content['Header'] }}</h5>
                            {{ content["Text"] }}
                        </div>
                        <div class="text_image__image">
                            <img
                                :src="'http://localhost:1337' + content['Image']['data']['attributes']['formats']['medium']['url']">
                        </div>
                    </div>

                    <!-- {{ content['Bild']['data']['attributes']['formats']['medium']['url'] }} -->
                </TextImage>
            </div>
            <div v-if="content['__component'] == 'heros.trenner-hero'">
                <!-- {{ content }} -->

                <SeperatorHero>
                    <div class="hero_seperator"
                        v-bind:style="{ backgroundImage: 'url(http://localhost:1337' + content['backgroundImage']['data']['attributes']['formats']['large']['url'] + ')' }">
                        <div class="content-container">
                            <div class="hero_seperator__content" v-bind:class="{ textAlignCenter: content['alignCenter'] }">
                                <h1 v-if="content['HeaderMain']" class="hero_seperator__main">{{ content['HeaderMain'] }}
                                </h1>
                                <h3 v-if="content['HeaderSub']" class="hero_seperator__sub">{{ content['HeaderSub'] }}</h3>
                                <div v-if="content['Text']" class="hero_seperator__text"> {{ content['Text'] }}</div>
                            </div>
                        </div>
                    </div>
                </SeperatorHero>
            </div>
            <div v-if="content['__component'] == 'teaser.flipcards'">
                <FlipCards>
                    <div class="content-container">
                        <div class="flipcards">
                            <div v-for="flipcard in content['Flipcard']" class="flipcards__single"
                                v-bind:style="{ backgroundImage: 'url(http://localhost:1337' + flipcard['image']['data']['attributes']['formats']['medium']['url'] + ')' }">
                                <div class="flipcards__single__front">
                                    <p class="flipcards__single__front__title">{{ flipcard['Title'] }}</p>
                                </div>
                                <div class="flipcards__single__back">
                                    <p class="flipcards__single__back__title">{{ flipcard['Title'] }}</p>
                                    <p class="flipcards__single__back__text"> {{ flipcard['text'] }}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </FlipCards>
            </div>
            <div v-if="content['__component'] == 'text.list'">
                <List>
                    <div class="content-container">
                        <ul class="ul">
                            <p class="ul__header" v-if="content['Header']">{{ content['Header'] }}</p>
                            <li v-for="li in content['Listitem']">{{ li['Listitem'] }}</li>

                        </ul>

                    </div>
                </List>
            </div>
            <div v-if="content['__component'] == 'text.text'">
                <Text>
                    <div class="text">{{ content['Text'] }}</div>

                </Text>
            </div>
            <div v-if="content['__component'] == 'text.big-text'">
                <BigText>
                    <p class="big_text">{{ content['Text'] }}</p>
                </BigText>
            </div>

            <div v-if="content['__component'] == 'jobs.joblist'">
                <!-- todo: make vue component -->
                <JobList>
                    <div class="job_offer_list">
                        <div v-for="job_ad in content['job_ads']['data']" class="job_offer_list__single">
                            <div class="job_offer_list__single__entry" v-if="job_ad['attributes']['page']['data'] != null">
                                <RouterLink
                                    :to="{ path: '/' + job_ad['attributes']['page']['data']['attributes']['PageName'] }"
                                    v-if="job_ad['attributes']['page']['data']['attributes']['URLSlug'] == null || job_ad['attributes']['page']['data']['attributes']['URLSlug'] == 'Default'">
                                    <p class="job_offer_list__single__title">{{ job_ad['attributes']['Title'] }}</p>
                                    <p class="job_offer_list__single__date">{{ job_ad['attributes']['Date'] }}</p>
                                </RouterLink>
                                <RouterLink
                                    :to="{ path: '/' + job_ad['attributes']['page']['data']['attributes']['URLSlug'] }"
                                    v-else>
                                    <p class="job_offer_list__single__title">{{ job_ad['attributes']['Title'] }}</p>
                                    <p class="job_offer_list__single__date">{{ job_ad['attributes']['Date'] }}</p>
                                </RouterLink>

                            </div>
                            <div class="job_offer_list__single__entry" v-else>
                                <p class="job_offer_list__single__title">{{ job_ad['attributes']['Title'] }}</p>
                                <p class="job_offer_list__single__date">{{ job_ad['attributes']['Date'] }}</p>
                            </div>
                        </div>
                    </div>

                </JobList>
            </div>
            <div v-if="content['__component'] == 'jobs.job-offer-images'">
                <JobImageList>
                    <div class="job_offer_images">
                        <div class="job_offer_images__single" v-for="joboffer in content['JobOfferCard']"
                            v-bind:style="{ backgroundImage: 'url(http://localhost:1337' + joboffer['Image']['data']['attributes']['formats']['medium']['url'] + ')' }">
                            <div v-if="joboffer['job_ad']['data']['attributes']['page']['data'] !== null">
                                <RouterLink
                                    :to="{ path: '/' + joboffer['job_ad']['data']['attributes']['page']['data']['attributes']['PageName'] }"
                                    v-if="joboffer['job_ad']['data']['attributes']['page']['data']['attributes']['URLSlug'] == null || joboffer['job_ad']['data']['attributes']['page']['data']['attributes']['URLSlug'] == 'Default'">
                                    <div class="job_offer_images__single__sticker">
                                        <p class="job_offer_images__single__sticker__title">{{
                                            joboffer['job_ad']['data']['attributes']['Title'] }}</p>
                                        <p class="job_offer_images__single__sticker__date">{{
                                            joboffer['job_ad']['data']['attributes']['Date'] }}</p>
                                    </div>

                                </RouterLink>
                                <RouterLink
                                    :to="{ path: '/' + joboffer['job_ad']['data']['attributes']['page']['data']['attributes']['URLSlug'] }"
                                    v-else>
                                    <div class="job_offer_images__single__sticker">
                                        <p class="job_offer_images__single__sticker__title">{{
                                            joboffer['job_ad']['data']['attributes']['Title'] }}</p>
                                        <p class="job_offer_images__single__sticker__date">{{
                                            joboffer['job_ad']['data']['attributes']['Date'] }}</p>
                                    </div>
                                </RouterLink>
                            </div>
                        <div v-else>
                            <div class="job_offer_images__single__sticker">
                                <p class="job_offer_images__single__sticker__title">{{
                                    joboffer['job_ad']['data']['attributes']['Title'] }}</p>
                                <p class="job_offer_images__single__sticker__date">{{
                                    joboffer['job_ad']['data']['attributes']['Date'] }}</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </JobImageList>
            </div>

            <div v-if="content['__component'] == 'formulare.formular' && content['Formular'] == 'PHP Entwickler (FE)'">
                <div class="content-container">
                    <Form></Form>
                </div>
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
    props: ['pageContentID', 'pageName'],
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
            jobObject: [],
            jobContentArray: [],
            TextImage_Text: [],
            TextImage_Image: [],
            pageID: [],
            //add data source url to create dynamic link to pass to axios.get function
            dataSrcURL: 'http://localhost:1337/api/pages/' + this.pageContentID + '/?populate=deep',
            //get page id via page name instead 



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
            if (response.data.data.attributes.job_ad.data) {
                this.jobObject = response.data.data.attributes.job_ad.data.attributes.Content
                // console.log(response.data.data.attributes.job_ad.data.attributes.Content)
                this.jobObject.forEach(el =>
                    // console.log(this.el),
                    //if element __component type is xy
                    // this xy = xy.value


                    this.loadContent(el)
                )
            }

            // this.pageObject.forEach(el =>
            //     this.prepareContent(el)
            // )
            // this.logContent(this.ContentArray)
            // console.log(this.ContentArray)
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
<style>
.negativeMarginTop {
    margin-top: -3rem !important;
}

.alignCenter {
    margin-left: auto;
    margin-right: auto;
}

.textAlignCenter {
    text-align: center;
}</style>