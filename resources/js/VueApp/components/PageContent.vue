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
import OfferAndNeed from './Elements/OfferAndNeed.vue'
import Video from './Elements/Video.vue'
import ShortProfile from './Elements/ShortProfile.vue'
import Benefits from './Elements/Benefits.vue'
// import TextImage from './TextImage.vue'
</script>
<template>
    <div class="pageContent">
        <div class="pageContent__single" v-for="content in ContentArray" v-if=(ContentArray)>
            <div v-if="content['__component'] == 'heros.hero'">
                <HeaderHero :background-image="content['backgroundImage']['data']['attributes']['formats']['large']['url']">
                    <template #Header>{{ content['Header'] }}</template>
                    <template #HeaderSub>{{ content['HeaderSub'] }}</template>
                    <template #Text>{{ content['Text'] }}</template>
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
                <ContentHeader :textAlignCenter="content.alignCenter">
                    <template #ContentHeader>{{ content['ContentHeader'] }}</template>
                </ContentHeader>
            </div>
            <div v-if="content['__component'] == 'gallery.logo-gallery'">
                <LogoGallery :negativeMarginTop="content.reduceSpaceTop" :logos="content['Logos']['data']"></LogoGallery>
            </div>
            <div v-if="content['__component'] == 'links.button'">
                <Button :href="content['URL']" :alignCenter="content['center']"
                    :negativeMarginTop="content['reduceSpaceTop']">
                    <template #text>{{ content['Text'] }}</template>
                </Button>
            </div>
            <div v-if="content['__component'] == 'text.text-image'">
                <TextImage :textImageLeft="content.imgLeft"
                    :imageSrc="content['Image']['data']['attributes']['formats']['medium']['url']">
                    <template #Header>{{ content['Header'] }}</template>
                    <template #Text>{{ content['Text'] }}</template>
                </TextImage>
            </div>
            <div v-if="content['__component'] == 'heros.trenner-hero'">
                <SeperatorHero :imageSrc="content['backgroundImage']['data']['attributes']['formats']['large']['url']"
                    :textAlignCenter="content['alignCenter']" :headerMain="content['HeaderMain']"
                    :headerSub="content['HeaderSub']" :text="content['Text']">
                </SeperatorHero>
            </div>
            <div v-if="content['__component'] == 'teaser.flipcards'">
                <FlipCards :flipCards="content['Flipcard']">
                </FlipCards>
            </div>
            <div v-if="content['__component'] == 'text.list'">
                <List :listItems="content['Listitem']" :contentHeader="content['Header']">
                </List>
            </div>
            <div v-if="content['__component'] == 'text.text'">
                <Text>
                    <template #Text>{{ content['Text'] }}</template>
                </Text>
            </div>
            <div v-if="content['__component'] == 'text.big-text'">
                <BigText :orange="content.orangeText" :textAlignCenter="content.textAlignCenter"
                    :reduceSpaceTop="content.reduceSpaceTop">
                    <template #Text>{{ content['Text'] }}</template>
                </BigText>
            </div>
            <div v-if="content['__component'] == 'jobs.joblist'">
                <JobList :jobAds="content['job_ads']['data']">
                </JobList>
            </div>
            <div v-if="content['__component'] == 'jobs.job-offer-images'">
                <JobImageList :jobOffers="content['JobOfferCard']">
                </JobImageList>
            </div>
            <div v-if="content['__component'] == 'formulare.formular'">
                <div class="content-container">
                    <Form :Formname="content['Formular']"></Form>
                </div>
            </div>
            <div v-if="content['__component'] == 'text.offer-and-need'">
                <OfferAndNeed :offerHeader="content['OfferHeader']" :wantedHeader="content['WeWantHeader']"
                    :offerLis="content['Offers']" :wantedLis="content['WeWant']"
                    :offerImageSrc="content.OfferImage.data.attributes.formats.medium.url"
                    :wantedImageSrc="content.WantedImage.data.attributes.formats.medium.url"></OfferAndNeed>
            </div>
            <div v-if="content['__component'] == 'media.video'">
                <Video :videoSource="content.Video.data.attributes.url" :reduceSpaceTop="content.reduceSpaceTop"></Video>
            </div>
            <div v-if="content['__component'] == 'text.short-profile'">
                <ShortProfile :Header="content.Header" :Text="content.Text"></ShortProfile>
            </div>
            <div v-if="content['__component'] == 'text.further-benefits'">
                <Benefits :Header="content.Header" :Benefits="content.Benefits"></Benefits>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    name: 'App',
    props: ['pageContentID', 'pageName'],
    data() {
        return {

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
        axios.get(this.dataSrcURL, {
            headers: {
                'Authorization': 'bearer ' + import.meta.env.VITE_STRAPI_ACCESS_TOKEN
            }
        }).then((response) => {

            this.pageObject = response.data.data.attributes.PageContent
            this.pageObject.forEach(el =>
                this.loadContent(el)
            )
            if (response.data.data.attributes.job_ad.data) {
                this.jobObject = response.data.data.attributes.job_ad.data.attributes.Content
                this.jobObject.forEach(el =>
                    this.loadContent(el)
                )
            }
        }
        )
    },
    methods: {
        //get all contents from page object
        loadContent(el) {
            this.ContentArray.push(el)
        },
    },
}

</script>
<style>
.negativeMarginTop {
    margin-top: -4rem !important;
}

.alignCenter {
    margin-left: auto;
    margin-right: auto;
}

.textAlignCenter {
    text-align: center;
}
</style>