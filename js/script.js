const { createApp } = Vue;

createApp({
    data(){
        return{
            todoList: [],
            url: 'server.php'

        }
    }, 
    methods: {
        getTodoList(){
            axios.get(this.url).then((resp) => {
                this.todolist = resp.data;
            });
        }
    },
    mounted() {
        
    },
}).mount( '#app' )