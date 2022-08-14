<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <div class="navbar-header">
                    <router-link to="/" class="navbar-brand">SPA FORUM <small>Laravel + Vue.js</small></router-link>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><router-link class="nav-link" :to="{ name: 'Login' }">Đăng nhập</router-link></li>
                        <li class="nav-item"><router-link class="nav-link" :to="{ name: 'Register' }">Đăng ký</router-link></li>
                    </ul>
                </div>
            </div>
        </nav>
        <breadcrumb :breadcrumb="breadcrumb"></breadcrumb>
        <router-view @update-breadcrumb="updateBreadcrumb"></router-view>
    </div>
</template>

<script>
    import Breadcrumb from './Breadcrumb.vue';

    export default {
        components: { Breadcrumb },

        data () {
            return {
                breadcrumb: [],
            }
        },

        methods: {
            updateBreadcrumb (breadcrumb) {
                this.breadcrumb = breadcrumb;
            }
        }
    }
</script>