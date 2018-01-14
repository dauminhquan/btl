<template>
    <div>
        <tin-tuyen-dung-item v-for="tintuyendung in danhsachtintuyendung" :key="tintuyendung.id" :tintuyendung="tintuyendung"></tin-tuyen-dung-item>
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

            }
        },
        props:[]
        ,
        methods: {
            tintuyendungmoi () {
                this.view_index = 0;
                axios.get('/api/recruitments')
                    .then((res) => {
                        this.danhsachtintuyendung = res.data

                    }).catch((err) => {
                    console.log(err)
                })
            }
        }
    }
</script>