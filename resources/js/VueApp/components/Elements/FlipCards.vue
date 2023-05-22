<template>
    <div class="content-container">
        <div class="flipcards">
            <div v-for="flipcard in flipCards" class="flipcards__single"
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
</template>
<style>

</style>
<script>
export default {
    name: "flipcards",
    props:['flipCards']
}

</script>