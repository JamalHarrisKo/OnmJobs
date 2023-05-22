<template>
    <div class="offerAndNeedContiainer">
        <div class="background-container background-container--gray">
            <div class="content-container">
                <div class="offerAndNeed">
                    <div class="offer">
                        <div class="offer__list">
                            <h4 class="offerHeader">{{ offerHeader }}</h4>
                            <ul>
                                <li v-for="li in offerLis">{{ li.ListItem }}</li>
                            </ul>
                        </div>
                        <div class="offerAndNeedImage__container">

                            <!-- <img class='offerAndNeedImage' :src="'http://localhost:1337' + offerImageSrc"> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="offerAndNeed_background_image offerAndNeed_background_image--offer"
                v-bind:style="{ backgroundImage: 'url(http://localhost:1337' + offerImageSrc + ')' }">
                <div class="offerAndNeedImage__container__overlay offerAndNeedImage__container__overlay--offer">
                </div>
            </div>
        </div>

        <div class="background-container background-container--orange">
            <div class="offerAndNeed_background_image offerAndNeed_background_image--wanted"
                v-bind:style="{ backgroundImage: 'url(http://localhost:1337' + wantedImageSrc + ')' }">
                <div class="offerAndNeedImage__container__overlay offerAndNeedImage__container__overlay--wanted">
                </div>
            </div>
            <div class="content-container">
                <div class="offerAndNeed">
                    <div class="wanted">
                        <div class="offerAndNeedImage__container">

                        </div>
                        <div class="wanted__list">
                            <h4 class="wantedHeader">{{ wantedHeader }}</h4>
                            <ul>
                                <li v-for="li in wantedLis">{{ li.ListItem }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>

</style>

<script>

export default {
    name: 'ContentHeader',
    props: ['offerHeader', 'offerLis', 'wantedHeader', 'wantedLis', 'offerImageSrc', 'wantedImageSrc'],
}
</script>