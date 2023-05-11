<template>
    <div class="content-container">
        <div class="job_offer_list">
            <div v-for="job_ad in jobAds" class="job_offer_list__single">
                <div class="job_offer_list__single__entry" v-if="job_ad['attributes']['page']['data'] != null">
                    <RouterLink :to="{ path: '/' + job_ad['attributes']['page']['data']['attributes']['PageName'] }"
                        v-if="job_ad['attributes']['page']['data']['attributes']['URLSlug'] == null || job_ad['attributes']['page']['data']['attributes']['URLSlug'] == 'Default'">
                        <p class="job_offer_list__single__title">{{ job_ad['attributes']['Title'] }}</p>
                        <p class="job_offer_list__single__date">{{ job_ad['attributes']['Date'] }}</p>
                    </RouterLink>
                    <RouterLink :to="{ path: '/' + job_ad['attributes']['page']['data']['attributes']['URLSlug'] }" v-else>
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
    </div>
</template>
<style>
.job_offer_list {
    margin-bottom: 7rem;
}

.job_offer_list__single {
    display: flex;
    flex-direction: row;
    justify-content: center;
    transition: ease 0.2s;
    background-color: #FFFFFF;
}

.job_offer_list__single:hover .job_offer_list__single__button {
    color: #ff8c00;
    border: 2px solid #ff8c00;
}

.job_offer_list__single:hover .job_offer_list__single__title {
    color: #ff8c00;
}

.job_offer_list__single:nth-child(2n) {
    background-color: #f6f6f6;
    z-index: 999;
}

.job_offer_list__single__title {
    font-weight: bold;
    padding: 1rem;
    color: #2a2c2c;
    transition: ease 0.2s;
}

.job_offer_list__single__date {
    padding: 1rem;
    color: #2a2c2c;
}

.job_offer_list__single__entry,
.job_offer_list a {
    display: flex;
    justify-content: center;
    text-decoration: none;
}
</style>

<script>
export default {
    name:'joblist',
    props:['jobAds']
}
</script>