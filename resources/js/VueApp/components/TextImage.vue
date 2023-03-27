<template>
    <div class="TextImage">
        <slot></slot>

    </div>
</template>


<style>
.TextImage{
    background-color: gray;
    padding: 2rem;
    max-width: 700px;
    margin: 2rem auto;
}
.TextImage img{
    max-width: 100%;
    height: auto;
}
</style>