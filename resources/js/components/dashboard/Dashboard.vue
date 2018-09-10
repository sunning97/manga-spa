<template>
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Starter Page </h4></div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Starter Page</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title" @click="aaa">Dashboard</h3></div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted(){

        },
        methods:{
            aaa:function () {
                let timerInterval;
                Vue.swal({
                    title: 'Đang đăng xuất...',
                    timer: 2000,
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
                    if (
                        result.dismiss === swal.DismissReason.timer
                    ) {
                        console.log('I was closed by the timer')
                    }
                })
            }
        }
    }
</script>
