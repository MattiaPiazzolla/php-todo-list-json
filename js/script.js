const { createApp } = Vue;

createApp({
    data(){
        return{
            serverUrl: 'server.php',
            todolist: [],
            text_task: '',
        }
    }, 
    methods: {
        getTodoList(){
            axios.get(this.serverUrl).then((result) => {
                this.todolist = result.data
            })
        },
        deleteTask(id){
            const data = {
                deleteTask: id

            }
            axios.post(this.serverUrl, data, {headers:{'Content-type': 'multipart/form-data'}}).then((result) => {
                this.todolist = result.data
            })
        },
        addTask(){
            if (!this.text_task.trim()) {
                return; 
            }
        
            let new_id = null;
        
            if (this.todolist.length > 0) {
                new_id = this.todolist[this.todolist.length - 1].id + 1;
            } else {
                new_id = 1;
            }
        
            let obj = {
                id: new_id,
                name: this.text_task
            }
        
            const data = {
                addTask: obj
            }
        
            axios.post(this.serverUrl, data, { headers: {'Content-type': 'multipart/form-data'}}).then((result) => {
                this.todolist = result.data;
                this.text_task = '' 
            })
        },

// chiedi come posso risolvere 
        doneClick(id) {
            const data = {
                toggleTask: id
            }

            axios.post(this.serverUrl, data, { headers: { 'Content-Type': 'application/json' } }).then((result) => {
                this.todolist = result.data
            })
        }

        
    },
    mounted() {
        this.getTodoList()
    },

}).mount( '#app' )