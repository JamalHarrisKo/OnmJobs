<template>
    <div class="content-container">
        <slot></slot>
        <div class="sectionHeader">
            <h3 class="sectionHeader__header">
                <slot name="HeaderMain"></slot>
            </h3>
            <h4 class="sectionHeader__headerSub">
                <slot name="HeaderSub"></slot>
            </h4>
            <p class="sectionHeader__text">
                <slot name="Text"></slot>
            </p>
        </div>
    </div>
</template>

<style>
.sectionHeader {
    text-align: center;
    margin-bottom: 5rem;
    max-width: 800px;
    margin: 0 auto;
    margin-bottom: 7rem;
    margin-top: 7rem;
}

.sectionHeader__header {
    font-size: 2.5rem;
    color: #ff8c00;
}

.sectionHeader__headerSub {
    font-size: 1.5rem;
}
</style>