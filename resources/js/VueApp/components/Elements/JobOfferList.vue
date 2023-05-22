<template>
    <div class="content-container">
        <div class="job_offer_list">
            <div v-for="job_ad in jobAds" class="job_offer_list__single">
                <div class="job_offer_list__single__entry" v-if="job_ad['attributes']['page']['data'] != null">
                    <RouterLink :to="{ path: '/' + job_ad['attributes']['page']['data']['attributes']['PageName'] }"
                        v-if="job_ad['attributes']['page']['data']['attributes']['URLSlug'] == null || job_ad['attributes']['page']['data']['attributes']['URLSlug'] == 'Default'">
                        <p class="job_offer_list__single__title">{{ job_ad['attributes']['Title'] }}</p>
                        <p class="job_offer_list__single__date">{{ formatDate(job_ad['attributes']['Date']) }}</p>
                    </RouterLink>
                    <RouterLink :to="{ path: '/' + job_ad['attributes']['page']['data']['attributes']['URLSlug'] }" v-else>
                        <p class="job_offer_list__single__title">{{ job_ad['attributes']['Title'] }}</p>
                        <p class="job_offer_list__single__date">{{ formatDate(job_ad['attributes']['Date']) }}</p>
                    </RouterLink>

                </div>
                <div class="job_offer_list__single__entry" v-else>
                    <p class="job_offer_list__single__title">{{ job_ad['attributes']['Title'] }}</p>
                    <p class="job_offer_list__single__date">{{ formatDate(job_ad['attributes']['Date']) }}</p>
                </div>
            </div>
        </div>
    </div>
</template>
<style>

</style>

<script>
export default {
    name:'joblist',
    props:['jobAds'],
    methods: {
        formatDate(date, locale = 'de-DE', options = {day:'2-digit', month:'long', year:'numeric'}){
            return new Date(date).toLocaleDateString(locale, options)
        }
    }
}
</script>