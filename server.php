<?php 
header('content_type: application/json');

$todoListToFix = file_get_contents('./data/todo-list.json');
$todoList = json_decode($todoListToFix, true);

echo json_encode($todoList) ;

?>