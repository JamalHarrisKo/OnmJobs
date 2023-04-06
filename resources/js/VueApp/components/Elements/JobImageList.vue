<template>
    <div class="content-container">
        <slot></slot>
    </div>
</template>
<style>
    .job_offer_images{
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 5rem;
    }
    .job_offer_images__single{
        background-size: cover;
        padding: 2rem;
        margin: 1rem;
        transition: ease 0.2s;
        width: 100%;
        height: 100%;
        width: 400px;
        height: 250px;
    }
    .job_offer_images__single:hover{
        transform: scale(1.05);
    }
    .job_offer_images__single__sticker{
        background-color: white;
        width: fit-content;
        padding: 1rem;
        max-width: 60%;
    }
    .job_offer_images__single__sticker__title{
        font-weight: bold;
    }
    .job_offer_images a{
        text-decoration: none;
        color: black;

    }
</style>