<template>
    <div class="content-container">
        <slot></slot>
    </div>
</template>

<style>
.logo_gallery{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    margin-bottom: 5rem;
}
.logo_gallery__single{
    width: 200px;
    display: flex;
    justify-content: center;
    margin: 0 2rem;
}
.logo_gallery__single img{
    width: 100%;
    height: auto;
}
</style>