<template>
    <div>
        <div class="box-body">
            <ul class="products-list product-list-in-box">
                <li class="item" v-for="tintuyendung in danhsachtintuyendung" :key="tintuyendung.id">
                    <div class="product-img">
                        <a :href="url+'/admin/recruitments/wait/'+tintuyendung.id"><img src="dist/img/default-50x50.gif" alt="Product Image"></a>
                    </div>
                    <div class="product-info">

                        <span class="label label-default pull-right">{{created_at(tintuyendung.created_at)}}</span>
                        <a :href="url + '/employer'+'/'+tintuyendung.employer_id" class="product-title">{{tintuyendung.name_company}}
                          </a>
                        <span class="product-description">
                            <a :href="url+'/admin/recruitments/wait/'+tintuyendung.id">{{tintuyendung.title}}</a>
                        </span>
                        <span class="product-description">
                             Loại: {{tintuyendung.recruitment_type_name}}
                        </span>
                        <span class="product-description">
                             Mức lương: ${{tintuyendung.pay}}
                        </span>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {//hàm tự động chạy khi khởi chạy
            this.tintuyendangcho()
        },
        computed:{

        },
        data(){
            return {
                danhsachtintuyendung: [],
                tintuyendung: {

                }
                ,url : window.location.origin
            }
        },
        props:[]
        ,
        methods: {
            tintuyendangcho () {
                this.view_index = 0;
                axios.get('/api/admin/recruitments/wait',{params:{
                    page: 1,
                    size: 5
                }})
                    .then((res) => {
                        this.danhsachtintuyendung = res.data.data
                        console.log(this.danhsachtintuyendung)

                    }).catch((err) => {
                    console.log(err)
                })
            },
            created_at(time){
                var date = new Date(time)
                var m = parseInt(date.getMonth())+1;
                return date.getDate()+'/'+m+'/'+date.getFullYear()+' '+date.getHours()+':'+date.getMinutes()
            }


        }
    }
</script>


