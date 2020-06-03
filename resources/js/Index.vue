<template>
    <div>
        <navbar-component></navbar-component>
        <div class="mt-5">
            <router-view></router-view>
        </div>
        <footer-component></footer-component>
    </div>
</template>

<script>
    let brand = " | Laravel Vue SPA"
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        watch: {
           '$route' (to, from){
               document.title = to.meta.title + brand
           } 
        }
    }
</script>
