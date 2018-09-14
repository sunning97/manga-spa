<template>
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Thể loại</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="">Bảng điều khiển</a></li>
                    <li class="active">Thể loại</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <div class="table-responsive">
                        <table class="table" ref="genre">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên</th>
                                    <th class="description">Mô tả</th>
                                    <th class="text-center">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(genre,index) in this.genres">
                                    <td>{{ getIndex(index) }}</td>
                                    <td>{{ genre.name }}</td>
                                    <td>{{ genre.description }}</td>
                                    <td class="text-center">
                                        <div class="btn-group m-b-20">
                                            <router-link class="btn btn-primary btn-sm waves-effect" :to="`/genres/edit/${genre.slug_name}.${genre.id}`">Sửa <i class="ti-eye"></i></router-link>
                                            <button type="button" class="btn btn-danger btn-sm" >Xóa <i class="ti-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <pagination :pagination="pagination" :offset="3" @click.native="getGenres(pagination.current_page)"></pagination>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import { mapGetters } from 'vuex';
    import Pagination from '../app-layout/Pagination';
    export default {
        data(){
            return{
                genres:{},
                pagination:{},
                isLoading:false
            }
        },
        mounted(){
            this.getGenres(1);
        },
        methods:{
            getGenres:function (page) {
                this.goTop();
                axios.get(`/api/genres?token=${this.token}&page=${page}`).then(response => {
                    this.genres = response.data.data;
                    this.pagination = response.data;
                }).catch(error => {

                })
            },
            getIndex:function (index) {
                return (this.pagination.current_page - 1) * this.pagination.per_page + index + 1;
            },
            goTop:function () {
                $('html, body').animate({
                    scrollTop: $(this.$refs.genre).offset().top
                }, 300);
            }
        },
        computed:{
            ...mapGetters([
                'token'
            ])
        },
        components:{
            'pagination':Pagination
        }
    }
</script>
<style scoped>
    .description{
        width: 500px;
    }
</style>
