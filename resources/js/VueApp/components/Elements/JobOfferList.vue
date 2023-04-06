<template>
    <div class="content-container">
        <slot></slot>
    </div>
</template>
<style>
.job_offer_list {
    margin-bottom: 5rem;
}

.job_offer_list__single {
    display: flex;
    flex-direction: row;
    justify-content: center;
    transition: ease 0.2s;
}

.job_offer_list__single:hover .job_offer_list__single__button {
    color: orange;
    border: 2px solid orange;
}

.job_offer_list__single:hover .job_offer_list__single__title {
    color: orange;
}

.job_offer_list__single:nth-child(2n) {
    background-color: #f6f6f6;
    z-index: 999;
}

.job_offer_list__single__title {
    font-weight: bold;
    padding: 1rem;
    color: black;
    transition: ease 0.2s;
}

.job_offer_list__single__date {
    padding: 1rem;
    color: black;
}
.job_offer_list__single__entry, .job_offer_list a{
    display: flex;
    justify-content: center;
    text-decoration: none;
}
</style>