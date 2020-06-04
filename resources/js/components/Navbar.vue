<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                <router-link class="navbar-brand" :to="{name: 'home'}">Laravel SPA</router-link> 
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name: 'home'}">Home</router-link> 
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name: 'about'}">About</router-link> 
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name: 'contact'}">Contact</router-link> 
                        </li>
                         <li class="nav-item">
                            <router-link class="nav-link" :to="{name: 'products'}">Products</router-link> 
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                        </li>
                    </ul>
                    
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name: 'login'}">Login</router-link> 
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name: 'register'}">Register</router-link> 
                        </li>
                    </ul>

                </div>
        </nav>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
