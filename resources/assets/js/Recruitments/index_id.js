
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
        getData(){
            var data = CKEDITOR.instances['content_re'].getData()
            CKEDITOR.instances['content_re'].destroy()
            this.edit = false
            var em_id = document.getElementById('box-recruitments')
            
            axios.put(`/api/recruitments/${em_id.attributes.pa_data.value}`,{
                content: data,
                employer_id : em_id.attributes.em_id.value
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