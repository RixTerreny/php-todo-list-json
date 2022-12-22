<?php
header("Access-Control-Allow-Origin: http://127.0.0.1:5173");
header("Access-Control-Allow-Headers: X-Requested-With");




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDo List JSON</title>
    
    <!-- Third party libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="bg-dark bg-gradient ">
    <div id="app">
        <div class="container w-25 m-auto mt-5">
            <h1 class="text-white mb-3">Todo List</h1>
            <div>
                <ul class="list-group">
                    <li v-for="element in lista" class="list-group-item">{{element.task1}}</li>
                </ul>
            </div>

            <form @submit.prevent="onClickFetch()"  class="mt-3" >
                <div class="input-group mb-3">
                    <input type="text" v-model="newTask.task1" class="form-control" placeholder="Inserisci elemento..." name="taskItem" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <input type="submit" @click="" class="input-group-text" id="basic-addon2" value="Inserisci">
                </div>
            </form>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>