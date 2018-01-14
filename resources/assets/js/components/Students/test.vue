<template>
    <div>
        <div v-for="test in tests" :key="test.id">
            {{test.name_company}}
        </div>
    </div>
</template>

<script>
    export default {
       mounted() {//hàm tự động chạy khi khởi chạy
           this.fetchData()
        },
        props: ['tests'],
        
        methods: {
            fetchData(){
                console.log(this.tests);
            }
        }
        
    }
</script>
<style>
    body, .tasks-list{
        padding-top: 20px; 
    }
    .done label {
        text-decoration: line-through;
    }
</style>

