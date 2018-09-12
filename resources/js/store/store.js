import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export const store = new Vuex.Store({
    state:{
        token: localStorage.getItem('access_token')|| null,
        user:{},
        errorLogin:{
            errors: {
                email:null,
                password:null
            },
            unauthorized:''
        }
    },
    getters: {
        token: state => state.token,
        errorLogin: state => state.errorLogin,
        user: state => state.user,
    },
    mutations:{
        setErrorLogin: (state,errors) => {
            state.errorLogin = errors
        },
        exceptErrorLogin: state => {
            state.errorLogin = {errors: {email: null, password: null}, unauthorized: null}
        },
        setToken:(state,token) => {
            state.token = token
        },
        setUserInfor: (state,user) => {
            state.user = user
        },
        exceptToken: state => {
            state.token = null
        },
        exceptUser: state => {
            state.user = {}
        }
    },
    actions:{
        loginProcess: (context,credential) => {
            return new Promise((resolve,reject) => {
                axios.post('/api/login',{
                    email:credential.email,
                    password:credential.password
                }).then(response=>{
                    context.commit('setToken',response.data.access_token);
                    localStorage.setItem('access_token',response.data.access_token);
                    localStorage.setItem('isLogin','true');
                    context.commit('exceptErrorLogin');
                    context.dispatch('getUserInfor');
                    resolve(response)
                }).catch(error => {
                    context.commit('setErrorLogin',error.response.data);
                    reject(error)
                })
            });

        },
        getUserInfor: context => {
            axios.post('/api/me',{
                token: context.getters.token
            }).then(response=>{
                context.commit('setUserInfor',response.data)
            }).catch()
        },
        logoutProcess: context => {
            return new Promise((resolve,reject) => {
                axios.post('/api/logout',{
                    token:context.getters.token
                }).then(response=>{
                    console.log(response.data);
                    context.commit('exceptToken');
                    context.commit('exceptUser');
                    localStorage.removeItem('access_token');
                    resolve(response)
                }).catch(error =>{
                    reject(error)
                })
            })
        }
    }
});
