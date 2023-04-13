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
                <div class="job_offer_images__single__container" v-else>
                    <a href="#" onclick="return false">
                        <div class="job_offer_images__single__sticker">
                            <p class="job_offer_images__single__sticker__title">{{
                                joboffer['job_ad']['data']['attributes']['Title'] }}</p>
                            <p class="job_offer_images__single__sticker__date">{{
                                joboffer['job_ad']['data']['attributes']['Date'] }}</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
.job_offer_images__single__container {
    width: 100%;
    height: 100%;
}

.job_offer_images__single__container a {
    width: 100%;
    height: 100%;
    display: block;
    padding: 2rem;

}

.job_offer_images {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 6rem;
}

.job_offer_images__single {
    background-size: cover;

    margin: 1rem;
    transition: ease 0.2s;
    max-width: 100%;
    min-width: 400px;
    height: 300px;
    flex-grow: 1;
}

.job_offer_images__single:hover {
    transform: scale(1.05);
}

.job_offer_images__single__sticker {
    background-color: white;
    width: fit-content;
    padding: 1rem;
    max-width: 330px;
}

.job_offer_images__single__sticker__title {
    font-weight: bold;
}

.job_offer_images a {
    text-decoration: none;
    color: black;

}
</style>

<script>
export default {
    name: 'jobImages',
    props: ['jobOffers']
}

</script>