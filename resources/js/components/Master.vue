<template>
    <div id="wrapper" :class="this.$route.path == '/login' ? 'login-register' : ''">
        <top-nav v-if="this.$route.path != '/login'"></top-nav>
        <sidebar v-if="this.$route.path != '/login'"></sidebar>
        <div :id="this.$route.path != '/login' ? 'page-wrapper' : ''">
            <router-view></router-view>
        </div>
        <theme-setting v-if="this.$route.path != '/login'"></theme-setting>
    </div>
</template>
<script>
    import ThemeSetting from '../components/app-layout/ThemeSetting';
    import TopNavbar from '../components/app-layout/TopNavbar';
    import SideBar from '../components/app-layout/Sidebar';
    export default {
        components:{
            'theme-setting': ThemeSetting,
            'top-nav': TopNavbar,
            'sidebar': SideBar,
        }
    }
</script>
