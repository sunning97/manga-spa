<template>
    <div class="login-box">
        <div class="white-box">
            <form class="form-horizontal form-material" id="loginform" action="" @submit="login">
                <h3 class="box-title m-b-20">Đăng nhập</h3>
                <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{ (errorLogin.errors.unauthorized) ? errorLogin.errors.unauthorized : '' }}</strong>
                </span>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Địa chỉ email" v-model="email">
                    </div>
                    <span class="invalid-feedback text-danger" role="alert" v-if="errorLogin.errors.email">
                        <strong>{{ (errorLogin.errors.email) ? errorLogin.errors.email[0] : '' }}</strong>
                    </span>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" placeholder="Mật khẩu"
                               v-model="password">
                    </div>
                    <span class="invalid-feedback text-danger" role="alert" v-if="errorLogin.errors.password">
                        <strong>{{ (errorLogin.errors.password) ? errorLogin.errors.password[0] : '' }}</strong>
                    </span>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-primary pull-left p-t-0">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup"> Nhớ mật khẩu </label>
                        </div>
                        <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i
                            class="fa fa-lock m-r-5"></i> Quên mật khẩu?</a></div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                                type="submit">Đăng nhập
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                        <div class="social">
                            <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title=""
                               data-original-title="Login with Facebook"> <i aria-hidden="true"
                                                                             class="fa fa-facebook"></i> </a>
                            <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title=""
                               data-original-title="Login with Google"> <i aria-hidden="true"
                                                                           class="fa fa-google-plus"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        <p>Don't have an account? <a href="register.html" class="text-primary m-l-5"><b>Sign Up</b></a>
                        </p>
                    </div>
                </div>
            </form>
            <form class="form-horizontal" id="recoverform" action="index.html">
                <div class="form-group ">
                    <div class="col-xs-12">
                        <h3>Recover Password</h3>
                        <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Email">
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light"
                                type="submit">Reset
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
    import {mapGetters} from 'vuex';
    import {mapActions} from 'vuex';

    export default {
        data() {
            return {
                email: '',
                password: ''
            }
        },
        computed: {
            ...mapGetters([
                'errorLogin'
            ])
        },
        methods: {
            login: function (event) {
                event.preventDefault();
                this.$store.dispatch('loginProcess', {
                    email: this.email,
                    password: this.password
                }).then(response=>{
                    this.$router.push('/');
                    const toast = Vue.swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    });

                    toast({
                        type: 'success',
                        title: 'Đăng nhập thành công!'
                    })
                });
            }
        },
        mounted() {
            if (this.$store.getters.token) {
                this.$router.push('/');
            }
        }
    }
</script>
