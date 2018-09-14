<template>
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Thể loại</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="">Bảng điều khiển</a></li>
                    <li><router-link to="/genres">Thể loại</router-link></li>
                    <li class="active">{{ this.genre.name }}</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <form class="form-horizontal" method="post" action="">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-md-12">Tên thể loại</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="name" :value="this.genre.name" @keyup="editGenre">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-md-12">Tên Slug</label>
                                    <div class="col-md-12">
                                        <input readonly type="text" class="form-control" name="slug_name" :value="this.slug">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="col-md-12">Mô tả</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="5" name="description" @keyup="editGenre"">{{  this.genre.description }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cập nhật</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import { mapGetters } from 'vuex';
    import str_slug from '../helper/slug'
    export default {
        data(){
            return{
                genre:{}
            }
        },
        mounted(){
            this.getGenre();
        },
        methods:{
            getGenre: function(){
                axios.get(`/api/genres/${this.$route.params.id}?token=${this.token}`).then(response=>{
                    this.genre = response.data;
                }).catch(error=>{
                    console.log(error);
                })
            },
            editGenre:function (event) {
                if($(event.target).attr('name') == 'name'){
                    this.genre.name = event.target.value;
                } else {
                    this.genre.description = event.target.value;
                }
            }
        },
        computed:{
            ...mapGetters([
                'token'
            ]),
            slug:function () {
                return str_slug(this.genre.name)
            },
        },
    }
</script>
