<template>

        <ul class="timeline timeline-inverse">
            <!-- timeline time label -->
            <li class="time-label">
                        <span class="bg-red">
                          {{getDayCreated(tintuyendung.created_at)}}
                        </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-envelope bg-blue"></i>

                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> {{getTimeCreated(tintuyendung.created_at)}}</span>

                    <h3 class="timeline-header"><a :href="url + '/employer'+'/'+tintuyendung.employer_id">{{tintuyendung.name_company}}</a><a
                            :href="url+ '/recruitments/'+tintuyendung.id"><span class="title-recruitment">  {{tintuyendung.title}}</span></a> </h3>

                    <div class="timeline-body" v-bind:style="style_xem_them" v-html="tintuyendung.content">

                    </div>
                    <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs" v-if="!xemchitiet" @click="xem_them(this)">Xem thêm</a>
                        <a class="btn btn-danger btn-xs" v-if="xemchitiet" @click="xem_them(this)">Thu nhỏ</a>
                        <a :href="url+'/student/sendcv?company='+tintuyendung.employer_id" class="btn btn-success btn-xs">Nộp hồ sơ</a>
                        <a v-if="xemchitiet" :href="url+ '/recruitments/'+tintuyendung.id" class="btn btn-link btn-xs">Xem chí tiết</a>
                    </div>
                </div>
            </li>
            <!-- END timeline item -->

        </ul>
</template>
<script>
    export default {

        data(){

            return {
                xemchitiet: false,
                url : window.location.origin,
                style_xem_them: {

                },

            }
        },
        props:['tintuyendung']
        ,
        methods: {
            getDayCreated(date_cr){

                var date = new Date(date_cr)
                var m = parseInt(date.getMonth())+1;
                return date.getDate()+'.'+m+'.'+date.getFullYear();
            },
            getTimeCreated(date_cr){
                var date = new Date(date_cr)
                return date.getHours()+':'+date.getSeconds();
            },
            xem_them(item){
                if(this.xemchitiet == true)
                {
                    this.xemchitiet = false;
                    this.style_xem_them = {
                        maxHeight: '100px'
                    }
                }
                else{
                    this.xemchitiet = true;
                    this.style_xem_them = {
                        maxHeight: '500px'
                    }
                }

            }

        }
    }
</script>