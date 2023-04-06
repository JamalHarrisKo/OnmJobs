<template>
    <div class="content-container">
        
            <slot></slot>

        </div>
    
</template>


<style>
.text_image {
    display: flex;
    /* justify-content: space-between; and make it not 100% */
    margin-bottom: 5rem;
    justify-content: space-between;
}
.textImageLeft{
    flex-direction: row-reverse;
}

.text_image__text{
    width: 60%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.text_image__image{
    width: 35%;
    display: flex;
    justify-content: center;
}
.text_image__image img {
    max-width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 10px;
}
.text_image__text__header{
    font-weight: bold;
    font-size: 1rem;
    max-width: 60%;
    margin-top: 0;
}
</style>