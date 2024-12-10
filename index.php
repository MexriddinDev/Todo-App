<?php
require 'bootstrap.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

use App\Todo;
use App\Router;
require 'helpers.php';
$router = new Router();
$todos = new Todo();

$router->get('/login', fn() => view('login'));
$router->get('/register', fn() => view('register'));
$router->put('/todos/{id}/update', fn($todoId)=>require 'controllers/updateTodoController.php');
$router->get('/todos', fn() => require 'controllers/getTodosController.php');
$router->get('/', fn() => require 'controllers/homeTodoController.php');
$router->post('/todos', fn()=>require 'controllers/storeTodoController.php');
$router->get('/todos/{id}/delete', fn($todoId)=>require 'controllers/deleteTodoController.php');
$router->get('/todos/{id}/edit', fn($todoId)=>require 'controllers/editTodoController.php');
$router->get('/telegram', fn() => require 'controllers/telegramController.php');
























































//$router->get('/pending', function ()use($todos) {
//    if (!empty($_GET['id'])) {
//        $todos->pending($_GET['id']);
//        header('Location: /todos');
//        exit();
//    }
//});
//echo '<h1 align="center">404 NOT FOUND</h1>';


