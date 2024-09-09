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
                console.log(resp.data);
                this.todoList = resp.data;
                console.log(this.todoList)
            });
        }
    },
    mounted() {
        this.getTodoList();
    },
}).mount( '#app' )