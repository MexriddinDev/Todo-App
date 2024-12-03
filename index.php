<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require 'src/Todo.php';

require 'helpers.php';
require 'src/Router.php';
$router = new Router();
$todos = new Todo();




$router->get('/', function () {
    view ('main');

});


    $router->get('/todos', function ()use($todos){
    $todos=$todos->getAllTodos();
    view('home', [
        'todos'=>$todos
    ]);
});



$router->post('/todos', function ()use ($todos){
    if (!empty($_POST['title']) && !empty($_POST['due_date'])) {
        $todos->store($_POST['title'], $_POST['due_date']);
        redirect('/todos');

    }
});
//$router->get('/todos/{id}/edit', function () {
//    view ('edit');
//});
//$router->get('/todos/{id}/edit', function ($todoId) {
//    echo 'Edit the task: ' . $todoId;
//});

$router->get('/todos/{id}/in_progress', function ($todoId)use($todos) {

        $todos->in_progress($todoId);
       redirect('/todos');
        exit();

});
$router->get('/todos/{id}/pending', function ($todoId)use($todos) {

    $todos->pending($todoId);
    redirect('/todos');
    exit();
});
$router->get('/todos/{id}/complete', function ($todoId)use($todos) {

    $todos->complete($todoId);
    redirect(' /todos');
    exit();
});

$router->get('/todos/{id}/delete', function ($todoId) use($todos){
  $todos->destroy($todoId);
    redirect(' /todos');
});

$router->get('/todos/{id}/edit', function ($todoId) use($todos){
//    echo 'Edit the task: ' . $todoId;
    $getTodo=$todos->getTodo($todoId);
    view ('edit', [
        'todos'=>$getTodo

    ]);


});

















































//$router->get('/pending', function ()use($todos) {
//    if (!empty($_GET['id'])) {
//        $todos->pending($_GET['id']);
//        header('Location: /todos');
//        exit();
//    }
//});
//echo '<h1 align="center">404 NOT FOUND</h1>';




//if ($uri == '/todos') {
//    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//        $todos = $todos->get();
//        view('home', [
//            'todos' => $todos
//        ]);
//        exit();
//    }
//
//
//    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//        if (!empty($_POST['title']) && !empty($_POST['due_date'])) {
//            $todos->store($_POST['title'], $_POST['due_date']);
//            header('Location: /todos');
//            exit();
//        }
//
//    }
//} elseif ($uri == '/complete') {
//    if (!empty($_GET['id'])) {
//        $todos->complete($_GET['id']);
//        header('Location: /');
//        exit();
//    }
//
//
//} elseif ($uri == '/in_progress') {
//    if (!empty($_GET['id'])) {
//        $todos->in_progress($_GET['id']);
//        header('Location: /');
//        exit();
//    }
//} elseif ($uri == '/pending') {
//    if (!empty($_GET['id'])) {
//        $todos->pending($_GET['id']);
//        header('Location: /');
//        exit();
//    }
//} else {
//    echo "Kechirasiz bu sahifa topilmadi";
//}