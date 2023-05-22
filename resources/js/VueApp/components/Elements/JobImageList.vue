<template>
    <div class="content-container">
        <div class="job_offer_images">
            <div class="job_offer_images__single" v-for="joboffer in jobOffers"
                v-bind:style="{ backgroundImage: 'url(http://localhost:1337' + joboffer['Image']['data']['attributes']['formats']['medium']['url'] + ')' }">
                <div class="job_offer_images__single__container"
                    v-if="joboffer['job_ad']['data']['attributes']['page']['data'] !== null">
                    <RouterLink
                        :to="{ path: '/' + joboffer['job_ad']['data']['attributes']['page']['data']['attributes']['PageName'] }"
                        v-if="joboffer['job_ad']['data']['attributes']['page']['data']['attributes']['URLSlug'] == null || joboffer['job_ad']['data']['attributes']['page']['data']['attributes']['URLSlug'] == 'Default'">
                        <div class="job_offer_images__single__sticker">
                            <p class="job_offer_images__single__sticker__title">{{
                                joboffer['job_ad']['data']['attributes']['Title'] }}</p>
                            <p class="job_offer_images__single__sticker__date">{{
                                formatDate(joboffer['job_ad']['data']['attributes']['Date'] )}}</p>
                        </div>
                    </RouterLink>
                    <RouterLink
                        :to="{ path: '/' + joboffer['job_ad']['data']['attributes']['page']['data']['attributes']['URLSlug'] }"
                        v-else>
                        <div class="job_offer_images__single__sticker">
                            <p class="job_offer_images__single__sticker__title">{{
                                joboffer['job_ad']['data']['attributes']['Title'] }}</p>
                            <p class="job_offer_images__single__sticker__date">{{
                                formatDate(joboffer['job_ad']['data']['attributes']['Date'] )}}</p>
                        </div>
                    </RouterLink>
                </div>
                <div class="job_offer_images__single__container" v-else>
                    <a href="#" onclick="return false">
                        <div class="job_offer_images__single__sticker">
                            <p class="job_offer_images__single__sticker__title">{{
                                joboffer['job_ad']['data']['attributes']['Title'] }}</p>
                            <p class="job_offer_images__single__sticker__date">
                                {{ formatDate(joboffer['job_ad']['data']['attributes']['Date'] )}}</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>
<style>

</style>

<script>
export default {
    name: 'jobImages',
    props: ['jobOffers'],
    methods: {
        formatDate(date, locale = 'de-DE', options = {day:'2-digit', month:'long', year:'numeric'}){
            return new Date(date).toLocaleDateString(locale, options)
        }
    }
}

</script>