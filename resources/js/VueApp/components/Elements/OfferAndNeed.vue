<template>
    <div class="background-container--gray">
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
                        <div class="offerAndNeedImage__container__overlay offerAndNeedImage__container__overlay--offer">
                        </div>
                        <img class='offerAndNeedImage' :src="'http://localhost:1337' + offerImageSrc">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- REMOVE IMAGES ! -->

    <div class="background-container background-container--orange">
        <div class="content-container">
            <div class="offerAndNeed">
                <div class="wanted">
                    <div class="offerAndNeedImage__container">
                        <div class="offerAndNeedImage__container__overlay offerAndNeedImage__container__overlay--wanted">
                        </div>
                        <img class='offerAndNeedImage' :src="'http://localhost:1337' + wantedImageSrc">
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
</template>
<style>
.background-container--orange {
    background-color: orange;
}

.background-container--gray {
    background-color: #f6f6f6;
}

/* .blend_bg{
    widows: 100%;
    height: 80px;
}
.blend_bg--white-gray{
    background-image: linear-gradient(rgba(255,255,255, 1),rgba(246,246,246, 1));
}
.blend_bg--gray-orange{
    background-image: linear-gradient(rgba(246,246,246, 1),rgba(246,246,246, 1), rgba(246,246,246, 1), rgba(246,246,246, 1),rgba(0,0,0, 1));

} */

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
    background-image: linear-gradient(to left, rgba(255, 165, 0, 1), rgba(255, 165, 0, 0), rgba(255, 165, 0, 0), rgba(255, 165, 0, 0));
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
    background-color: orange;
    color: #f6f6f6;
}

.offer__list {
    background-color: #f6f6f6;
    color: orange;
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