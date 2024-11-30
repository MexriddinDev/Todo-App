<?php


require 'src/Todo.php';

require 'helpers.php';
require 'src/Router.php';
$router = new Router();
$todos = new Todo();




//$router->get('/',function(){
//    echo '<a href="/todos">Todos</a>';
//
//});

$router->get('/', function () {
    echo '
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <a href="/todos" style="
            display: inline-block;
            width: 300px;
            height: 100px;
            line-height: 100px;
            font-size: 20px;
            text-align: center;
            text-decoration: none;
            color: white;
           
         background-image: url(\'https://octagon-design.com/cdn/shop/products/TODONEGRE.jpg?v=1604421213?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1\');
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s, box-shadow 0.2s;
        " onmouseover="this.style.transform=\'scale(1.1)\'; this.style.boxShadow=\'0 6px 12px rgba(0, 0, 0, 0.3)\';"
        onmouseout="this.style.transform=\'scale(1)\'; this.style.boxShadow=\'0 4px 8px rgba(0, 0, 0, 0.2)\';">
            
        </a>
    </div>';
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
        header('Location: /todos');

    }
});

$router->get('/complete', function ()use($todos){
    if (!empty($_GET['id'])) {
        $todos->complete($_GET['id']);
        header('Location: /todos');
    exit();
    }
});
$router->get('/in_progress', function ()use($todos) {
    if (!empty($_GET['id'])) {
        $todos->in_progress($_GET['id']);
        header('Location: /todos');
        exit();
    }
});
$router->get('/pending', function ()use($todos) {
    if (!empty($_GET['id'])) {
        $todos->pending($_GET['id']);
        header('Location: /todos');
        exit();
    }
});
echo '<h1 align="center">404 NOT FOUND</h1>';




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