
window.Vue = require('vue');

window.axios = require('axios');


const danhsachtintuyendung = new Vue({
    el: '#box-recruitments',
    data(){
        return {
           edit: false
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
        getData(){
            var data = CKEDITOR.instances['content_re'].getData()
            CKEDITOR.instances['content_re'].destroy()
            this.edit = false
            var em_id = document.getElementById('box-recruitments')
            
            axios.put(`/api/recruitments/${em_id.attributes.pa_data.value}`,{
                content: data
            })
            .then((res) => {
                console.log(res)
                alert('Lưu thành công')
                console.log('task updated')
            })
            .catch((err) => {
                console.log(err)
            })
            
        }
    }
});