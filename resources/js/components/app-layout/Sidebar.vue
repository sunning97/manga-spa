<template>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse slimscrollsidebar">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                </button>
                            </span>
                    </div>
                </li>
                <li class="user-pro">
                    <a href="#" class="waves-effect"><img :src="user ? (user.avatar) : ''" alt="user-img" class="img-circle"> <span class="hide-menu"> {{ user ? `${user.f_name} ${user.l_name}` : '' }}<span class="fa arrow"></span></span>
                    </a>
                    <ul class="nav nav-second-level collapse">
                        <li><a class="active" href="javascript:void(0)"><i class="ti-user"></i> Trang cá nhân</a></li>
                        <li><a href="" @click="logout"><i class="fa fa-power-off"></i> Đăng xuất</a></li>
                    </ul>
                </li>
                <li class="nav-small-cap m-t-10">--- Main Menu</li>
                <li>
                    <router-link class="waves-effect" to="/" exact>
                        <i data-icon="P" class="linea-icon linea-basic fa-fw"></i>
                        <span class="hide-menu">Dashboard</span>
                    </router-link>
                </li>
                <li>
                    <router-link class="waves-effect" to="/mangas">
                        <i data-icon="P" class="linea-icon linea-basic fa-fw"></i>
                        <span class="hide-menu">Mangas</span>
                    </router-link>
                </li>
                <li>
                    <router-link class="waves-effect" to="/genres">
                        <i data-icon="P" class="linea-icon linea-basic fa-fw"></i>
                        <span class="hide-menu">Genres</span>
                    </router-link>
                </li>
                <li>
                    <router-link class="waves-effect" to="/authors">
                        <i data-icon="P" class="linea-icon linea-basic fa-fw"></i>
                        <span class="hide-menu">Authors</span>
                    </router-link>
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
    import { mapGetters } from 'vuex';
    export default {
        methods:{
            logout:function (event) {
                event.preventDefault();
                let timerInterval;
                Vue.swal({
                    title: 'Đang đăng xuất...',
                    timer: 1000,
                    onOpen: () => {
                        Vue.swal.showLoading();
                        timerInterval = setInterval(() => {
                            swal.getContent().querySelector('strong')
                                .textContent = swal.getTimerLeft()
                        }, 100)
                    },
                    onClose: () => {
                        clearInterval(timerInterval)
                    }
                }).then((result) => {
                    this.$store.dispatch('logoutProcess').then(response =>{
                        this.$router.push('/login');
                    })
                })
            }
        },
        mounted(){
            if(!this.token){
                this.$router.push('/login');
            }
            this.$store.dispatch('getUserInfor');
        },
        computed:{
            ...mapGetters([
                'user',
                'token'
            ])
        }
    }
</script>
<style scoped>
    .router-link-active{
        color: #2b2b2b;
        font-weight: 500;
    }
</style>
