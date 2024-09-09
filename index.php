<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
                        <ul>
                            <li v-for="item in todoList" :key="item.id"
                                class="border border-2 border-black rounded-1 my-3 p-3 d-flex justify-content-between ">
                                <div class="text d-flex align-items-center">
                                    <input type="checkbox" class="me-3" v-bind:checked="item.done">
                                    <span :class="item.done ? 'text-decoration-line-through' : '' ">
                                        {{ item.name }}
                                    </span>
                                </div>
                                <button class="btn text-light btn-danger">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="./js/script.js" type="text/javascript"></script>
</body>

</html>