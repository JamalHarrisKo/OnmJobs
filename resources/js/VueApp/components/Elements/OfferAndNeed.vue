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
.offerAndNeedContiainer {
    margin-bottom: 7rem;
    /* margin-top: -3rem; */
}

.background-container--orange {
    background-color: #ff8c00;
}

.offerAndNeed ul {
    margin-bottom: 1rem;
    list-style: none;
    padding: 0;
}

.offerAndNeed ul li {
    margin-bottom: 1rem;
    display: flex;
    line-height: 1.5;
    color: #2a2c2c;


}

.offerAndNeed ul li::before {
    content: '\2714';
    padding-right: 0.5rem;
    height: 100%;
    display: block;
    color: #ff8c00;
}
.wanted__list ul li{
    color: white;
}
.wanted__list ul li::before{
    color: white;
}
.background-container--gray {
    background-color: #f6f6f6;
}

.background-container {
    position: relative;
    display: flex;
}

.offerHeader,
.wantedHeader {
    font-size: 3rem;
    margin: 2rem 0;

}

.offerAndNeed_background_image {
    position: absolute;
    width: 50%;
    background-size: cover;
    height: 100%;
}

.offerAndNeed_background_image--offer {
    right: 0;
    top: 0;
}

.offerAndNeed_background_image--wanted {
    left: 0;
    top: 0;
}

.offerAndNeedImage__container__overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.offerAndNeedImage__container__overlay--offer {
    background-image: linear-gradient(to right, rgba(246, 246, 246, 1), rgba(246, 246, 246, 0), rgba(246, 246, 246, 0), rgba(255, 165, 0, 0));
}

.offerAndNeedImage__container__overlay--wanted {
    background-image: linear-gradient(to left, rgba(255, 140, 1), rgba(255, 165, 0, 0), rgba(255, 165, 0, 0), rgba(255, 165, 0, 0));
}

.offerAndNeedImage__container {
    height: 100%;
    width: 50%;
    position: relative;
}

.offerAndNeedImage {
    height: 100%;
    width: 100%;
    object-fit: cover;
    background-color: black;
    display: block;
}

.offer,
.wanted {
    display: flex;
}

.offer__list,
.wanted__list {
    width: 50%;
    padding: 2rem;
}

.wanted__list {
    background-color: #ff8c00;
    color: #f6f6f6;
}

.offer__list {
    background-color: #f6f6f6;
    color: #ff8c00;
}

.content_header {
    font-size: 2rem;
    margin-bottom: 3rem;
}
</style>

<script>

export default {
    name: 'ContentHeader',
    props: ['offerHeader', 'offerLis', 'wantedHeader', 'wantedLis', 'offerImageSrc', 'wantedImageSrc'],
}
</script>