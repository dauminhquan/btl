<template>
    <div>
        <tin-tuyen-dung-item v-for="tintuyendung in danhsachtintuyendung" :key="tintuyendung.id" :tintuyendung="tintuyendung"></tin-tuyen-dung-item>
        <button class="btn btn-info center" v-if="end == false" @click="more_info()">Xem thêm</button>
    </div>
</template>

<script>
    import item_tuyen_dung from './itemtuyendung.vue'
    export default {
        mounted() {//hàm tự động chạy khi khởi chạy
            this.tintuyendungmoi()
        },
        components:{
            'tin-tuyen-dung-item':item_tuyen_dung
        }
        ,
        data(){

            return {
                danhsachtintuyendung: [],
                tintuyendung: {
                }
                ,url : window.location.origin,
                style_xem_them: {

                },
                size: 10,
                page: 1,
                end: false

            }
        },
        props:[]
        ,
        methods: {
            tintuyendungmoi () {
                this.view_index = 0;
                axios.get('/api/recruitments',{
                    params: {
                        page: this.page,
                        size: this.size
                    }
                })
                    .then((res) => {
                        if(res.data.data.length < this.size)
                        {
                            this.end = true;
                        }
                        this.danhsachtintuyendung = res.data.data

                    }).catch((err) => {
                    console.log(err)
                })
            },
            more_info(){
                if(this.end == true)
                {
                    return false;
                }
                this.page++;
                axios.get('/api/recruitments',{
                    params: {
                        page: this.page,
                        size: this.size
                    }
                })
                    .then((res) => {
                        if(res.data.data.length == 0)
                        {
                            this.end = true;
                        }
                        this.danhsachtintuyendung = this.danhsachtintuyendung.concat(res.data.data)

                    }).catch((err) => {
                    console.log(err)
                })
            }
        }
    }
</script>
<style>
.center{
    margin-left: 48%;
}
</style>
