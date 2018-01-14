<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">My tasks</div>

                    <div class="panel-body">
                        
                        <div class="input-group">
                            <input type="text" 
                            class="form-control" 
                            v-model="task.name"
                            @keydown.enter ="create"
                            >
                            <span class="input-group-btn">
                                <button class="btn btn-success" @click="create">Add</button>
                            </span>
                        </div>
                        <div class="alert alert-danger" v-if="!tasks.length">
                            You have not task!
                        </div>
                        <div class="tasks-list">
                            <ul class="list-unstyled">
                                <li v-for="task in tasks" :key="task.id" :class="{done:!task.completed}">
                                    <div class="checkbox">
                                        <label for="">
                                            <input type="checkbox" name="" id="" v-model="task.completed" @click="done(task)">{{task.name}}
                                        </label>
                                        <div class="pull-right">
                                            <a href="#" @click.prevent="remove(task)">x</a>
                                        </div>
                                    </div>
                                </li>
                               
                            </ul>
                        </div>
                    </div>

                    <div class="panel-footer" v-if="tasks.length">
                        <span class="label label-default">You have {{tasks.length}} task</span>
                        <span class="label label-warning">{{remainingTasks()}} tasks left</span>
                        <span class="label label-success"> {{completedTasks()}} tasks completed</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {//hàm tự động chạy khi khởi chạy
           this.fetchData()
        },
        data(){
            return {
                tasks: [],
                task: {
                    name: ''
                }
            }
        },
        methods: {
            remainingTasks(){
                return this.tasks.filter(task => {return !task.completed}).length
            },
            completedTasks()
            {
                return this.tasks.filter(task => {return task.completed}).length
            }
            ,
            fetchData () {
                axios.get('/api/task')
                .then((res) => {
                    this.tasks = res.data
                }).catch((err) => {
                    console.log(err)
                })
            },
            create() {
                axios.post('/api/task',this.task)
                .then((res) => {
                    this.tasks.unshift(res.data)
                    this.task.name = ''
                })
                .catch((err) => { console.log(err) })
            },
            done(task){
                axios.put(`/api/task/${task.id}`,{
                    completed: !task.completed
                })
                .then((res) => {
                    console.log('task updated')
                })
                .catch((err) => {
                    console.log(err)
                })
            },
            remove(task){
                axios.delete(`/api/task/${task.id}`,{
                    completed: !task.completed
                })
                .then((res) => {
                    const taskIndex = this.tasks.indexOf(task)
                    this.tasks.splice(taskIndex,1)
                })
                .catch((err) => {
                    console.log(err)
                })
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

