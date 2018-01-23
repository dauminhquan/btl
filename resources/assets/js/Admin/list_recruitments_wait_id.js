
window.Vue = require('vue');

window.axios = require('axios');


const danhsachtintuyendung = new Vue({
    el: '#box-recruitments',
    data(){
        return {
           edit: false,
           report: ''
        }
    },
    
    
    methods: {
        sua(){
            this.edit = true
          CKEDITOR.replace( 'content_re' );
        },
        xoa(id){
            axios.delete(`/api/recruitments/${id}`)
            .then((res) => {
                console.log(res)
                alert('Xóa thành công')
                // window.location="http://www.vietjack.com"
            })
            .catch((err) => {
                console.log(err)
            })
        },
        duyettin(id){
            axios.put(`/api/recruitments/${id}`,{
                success: true
            })
            .then((res) => {
                console.log(res)
                alert('Duyệt tin thành công')
            })
            .catch((err) => {
                console.log(err)
            })
        },
        huybaiviet(id){
            // this.xoa(id)
            axios.put(`/api/recruitments/${id}`,{
                success: false
            })
            .then((res) => {
                console.log(res)
                alert('Duyệt tin thành công')
            })
            .catch((err) => {
                console.log(err)
            })
            axios.post(`/api/admin/recruitments/report`,{
                e_id: parseInt(document.getElementById('box-recruitments').attributes.em_id.value),
                re_id: id,
                report: this.report
            })
            .then((res) => {
                console.log(res)
                alert('Hủy tin thành công')
            })
            .catch((err) => {
                console.log(err)
            })
        },
        getData(id){
            var data = CKEDITOR.instances['content_re'].getData()
            CKEDITOR.instances['content_re'].destroy()
            this.edit = false
            var em_id = document.getElementById('box-recruitments')
            
            axios.put(`/api/recruitments/${id}`,{
                content: data
            })
            .then((res) => {
                console.log(res)
                var opts = {
                    title: "Thành công",
                    text: "Sửa nội dung tin thành công!",
                    addclass: 'bg-primary',
                    type : "success"
                };

                new PNotify(opts);
                console.log('task updated')
            })
            .catch((err) => {
                console.log(err)
            })
            
        },
        
    }
});