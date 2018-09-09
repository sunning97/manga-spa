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
                    <a href="#" class="waves-effect"><img src="" alt="user-img"
                                                          class="img-circle"> <span
                        class="hide-menu"> Steve Gection<span class="fa arrow"></span></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                </li>
                <li class="nav-small-cap m-t-10">--- Main Menu</li>
                <li>
                    <router-link class="waves-effect" to="/mangas" exact>
                        <i data-icon="P" class="linea-icon linea-basic fa-fw"></i>
                        <span class="hide-menu">Mangas</span>
                    </router-link>
                </li>
                <li>
                    <router-link class="waves-effect" to="/genres" exact>
                        <i data-icon="P" class="linea-icon linea-basic fa-fw"></i>
                        <span class="hide-menu">Genres</span>
                    </router-link>
                </li>
                <li>
                    <router-link class="waves-effect" to="/authors" exact>
                        <i data-icon="P" class="linea-icon linea-basic fa-fw"></i>
                        <span class="hide-menu">Authors</span>
                    </router-link>
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
    export default {

    }
</script>
