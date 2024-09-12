<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.7/axios.min.js"
        integrity="sha512-DdX/YwF5e41Ok+AI81HI8f5/5UsoxCVT9GKYZRIzpLxb8Twz4ZwPPX+jQMwMhNQ9b5+zDEefc+dcvQoPWGNZ3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>PHP ToDo List JSON</title>
</head>

<body>
    <div id="app">
        <header class="bg-dark position-fixed w-100">
            <div class="container p-3">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-center text-light">PHP ToDo List JSON</h3>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row justify-content-center align-items-center vh-100">
                    <div class="col-12">
                        <ul class="p-0">
                            <li v-for="todo in todolist" :key="todo.id"
                                class="border border-2 border-black rounded-1 my-3 p-3 d-flex justify-content-between align-items-center text">
                                <div class="d-flex">
                                    <span :class="todo.done ? 'text-decoration-line-through text-success' : '' "
                                        class=" w-100" @click="doneClick(todo.id)">
                                        {{ todo.name }}
                                    </span>

                                </div>
                                <button class=" btn text-light btn-danger" @click="deleteTask(todo.id)">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </li>
                        </ul>
                        <div class="newTaskSection d-flex">
                            <input type="text" name="newTask" id="newTask"
                                class="form-control form-control-sm me-3 border border-2 border-black rounded-1 px-3 py-4"
                                placeholder="Aggiungi una nuova TASK" v-model="text_task" @keyup.enter="addTask">
                            <button class="btn btn-dark btn-sm" @click="addTask">Aggiungi</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="./js/script.js" type="text/javascript"></script>
</body>

</html>