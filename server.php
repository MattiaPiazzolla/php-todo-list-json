<?php 
$string = file_get_contents('./data/todolist.json');
$todolist = json_decode($string, true);


if (isset($_POST['addTask'])) {
    $task = [
        'id' => (int)$_POST['addTask']['id'],
        'done' => false,
        'name' => $_POST['addTask']['name'],
    ];
    $todolist[] = $task;
    $string = json_encode($todolist);
    file_put_contents('./data/todolist.json', $string);
} elseif (isset($_POST['deleteTask'])){
    foreach ($todolist as $index => $todo) {
        if($todo['id'] == $_POST['deleteTask']){
            array_splice($todolist, $index, 1); 
        }
    }
    $string = json_encode($todolist);
    file_put_contents('./data/todolist.json', $string);    
}

// chiedi come posso risolvere 
 elseif (isset($_POST['toggleTask'])){
    foreach ($todolist as $index => $todo) {
        if($todo['id'] == $_POST['toggleTask']){
            $todolist[$index]['done'] = !$todolist[$index]['done'];
        }
    }
    $string = json_encode($todolist);
    file_put_contents('./data/todolist.json', $string); 
}

header('Content-Type: application/json');
echo json_encode($todolist);



?>