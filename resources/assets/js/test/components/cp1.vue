<template>
    <div>
        <p>{{value}}</p>
        <button @click="tangmot()">click</button>
    </div>
</template>
<script>
    export default {
        computed: {
            value(){
                return this.$store.state.gt
            },

        },
        methods: {
          tangmot(){
              this.$store.state.gt++
          }
        }
    }
</script>
