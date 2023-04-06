<template>
    <div class="Sperator_Hero">
        <div class="hero_seperator__overlay">
        </div>
        <slot></slot>

    </div>
</template>


<style>

    .Sperator_Hero{
        color: white;
        position: relative;
        width: 100%;
        margin-bottom: 3rem;
    }
    .hero_seperator__overlay{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.7);
        z-index: 0;
    }
    .hero_seperator{
        background-size: cover;
        height: 600px;
        max-height: 100vh;
        display: flex;
        align-items: center;;
        /* background-position: center; */
        background-repeat: no-repeat;
        background-attachment: fixed;

        /* justify-content: center;
        align-items: center; */
    }
    .hero_seperator__content{
        widows: 100%;
        z-index: 100;
        position: relative;
        /* text-align: center; */
    }
    .hero_seperator__main{
        font-size: 3.5rem;
    }
    .hero_seperator__sub{
        font-size: 2rem;
    }
    .hero_seperator__text{
        font-size: 1.2rem;
        max-width:50%;
    }

</style>