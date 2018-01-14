<template>
    <div>
        <p>{{value}}</p>
    </div>
</template>
<script>
    export default {
        computed: {
            value(){
                return this.$store.state.gt
            }
        }
    }
</script>